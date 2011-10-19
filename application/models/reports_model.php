<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 * Reports class to make database queries that create reports tools
 * 
 * @author pyasi
 *
 */

class Reports_Model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }	


	function services_by_org($organization_id)
	{
		// services by organization
		$query = "SELECT u.id u_id, u.account_number u_ac, ".
			"u.master_service_id u_msid, u.billing_id u_bid, ".
			"u.removed u_rem, u.usage_multiple u_usage, ".
			"b.next_billing_date b_next_billing_date, b.id b_id, ".
			"b.billing_type b_type, t.id t_id, t.frequency t_freq, ".
			"t.method t_method, m.service_description m_service_description, ".
			"m.id m_id, m.pricerate m_pricerate, m.frequency m_freq ".
			"FROM user_services u ".
			"LEFT JOIN master_services m ON u.master_service_id = m.id ".
			"LEFT JOIN billing b ON u.billing_id = b.id ".
			"LEFT JOIN billing_types t ON b.billing_type = t.id ".
			"WHERE b.organization_id = '$organization_id' ".
			"AND t.method <> 'free' AND u.removed <> 'y'";

		$result = $this->db->query($query) or die ("Services Query Failed");

		return $result->result_array();

	}


	function taxes_by_org($organization_id)
	{
		$query = "SELECT ts.id ts_id, ts.master_services_id ts_serviceid, ".
			"ts.tax_rate_id ts_rateid, ms.id ms_id, ".
			"ms.service_description ms_description, ms.pricerate ms_pricerate, ".
			"ms.frequency ms_freq, tr.id tr_id, tr.description tr_description, ".
			"tr.rate tr_rate, tr.if_field tr_if_field, tr.if_value tr_if_value, ".
			"tr.percentage_or_fixed tr_percentage_or_fixed, ".
			"us.master_service_id us_msid, us.billing_id us_bid, us.id us_id, ".
			"us.removed us_removed, us.account_number us_account_number, ". 
			"us.usage_multiple us_usage_multiple,  ".
			"te.account_number te_account_number, te.tax_rate_id te_tax_rate_id, ".
			"b.id b_id, b.billing_type b_billing_type, ".
			"t.id t_id, t.frequency t_freq, t.method t_method ".
			"FROM taxed_services ts ".
			"LEFT JOIN user_services us ON ".
			"us.master_service_id = ts.master_services_id ".
			"LEFT JOIN master_services ms ON ms.id = ts.master_services_id ".
			"LEFT JOIN tax_rates tr ON tr.id = ts.tax_rate_id ".
			"LEFT JOIN tax_exempt te ON te.account_number = us.account_number ".
			"AND te.tax_rate_id = tr.id ".
			"LEFT JOIN billing b ON us.billing_id = b.id ".
			"LEFT JOIN billing_types t ON b.billing_type = t.id ".
			"WHERE b.organization_id = '$organization_id' ".
			"AND us.removed <> 'y'";

		$taxresult = $this->db->query($query) or die ("Taxes Query Failed");

		return $taxresult->result_array;
	}

	/*
	 * ------------------------------------------------------------------------
	 *  get master services description, price, category, and frequency by id
	 * ------------------------------------------------------------------------
	 */
	function master_service_info($id)
	{
		$query = "SELECT ms.service_description, ms.pricerate, ms.category, ".
			"ms.frequency FROM master_services ms ".
			"WHERE ms.id = '$id'";
		$serviceresult = $this->db->query($query) or die ("Services Query Failed");

		return $serviceresult->result_array();
	}
			
	function taxed_services($id)
	{
		$query = "SELECT tr.description, tr.rate, ms.service_description, ".
			"ms.category FROM tax_rates tr ".
			"LEFT JOIN taxed_services ts ON ts.tax_rate_id = tr.id ".
			"LEFT JOIN master_services ms ON ms.id = ts.master_services_id ".	
			"WHERE ts.id = '$id'";
		$taxresult = $this->db->query($query) or die ("Taxes Query Failed");

		return $taxresult->result_array();
	}


	function total_services($organization_id)
	{
		// get the total services for each billing type
		$query = "SELECT m.id m_id, m.service_description m_servicedescription, ".
			"m.pricerate m_pricerate, m.frequency m_frequency, ".
			"m.organization_id m_organization_id, g.org_name g_org_name, ".
			"u.removed u_removed, u.master_service_id u_msid, ".
			"count(bt.method) AS TotalNumber, ".
			"b.id b_id, b.billing_type b_billing_type, bt.id bt_id, ".
			"bt.method bt_method ". 
			"FROM user_services u ".
			"LEFT JOIN master_services m ON u.master_service_id = m.id ".
			"LEFT JOIN billing b ON b.id = u.billing_id ".
			"LEFT JOIN billing_types bt ON b.billing_type = bt.id ".
			"LEFT JOIN general g ON m.organization_id = g.id ".
			"WHERE u.removed <> 'y' AND bt.method <> 'free' ".
			"AND b.organization_id = '$organization_id' AND m.pricerate > '0' ". 
			"AND m.frequency > '0' GROUP BY bt.method ORDER BY TotalNumber";
		$result = $this->db->query($query) or die ("query failed");

		return $result->result_array();

	}


	function services_in_categories($organization_id)
	{
		// get the number of services in each category
		$query = "SELECT m.id m_id, m.service_description m_servicedescription, ".
			"m.pricerate m_pricerate, m.category m_category, m.frequency m_frequency, ".
			"m.organization_id m_organization_id, g.org_name g_org_name, ".
			"u.removed u_removed, u.master_service_id u_msid, ".
			"count(bt.method) AS TotalNumber, ".
			"b.id b_id, b.billing_type b_billing_type, bt.id bt_id, bt.method bt_method ".
			"FROM user_services u ".
			"LEFT JOIN master_services m ON u.master_service_id = m.id ".
			"LEFT JOIN billing b ON b.id = u.billing_id ".
			"LEFT JOIN billing_types bt ON b.billing_type = bt.id ".
			"LEFT JOIN general g ON m.organization_id = g.id ".
			"WHERE u.removed <> 'y' AND b.organization_id = '$organization_id' ".
			"AND m.frequency > '0' GROUP BY m.category ORDER BY TotalNumber";
		$result = $this->db->query($query) or die ("query failed");

		return $result->result_array();

	}

	function number_of_customers()
	{
		// get the number of customers
		$query = "SELECT COUNT(*) FROM customer WHERE cancel_date is NULL";
		$result = $this->db->query($query) or die ("query failed");
		$myresult = $result->row_array();
		return $myresult['COUNT(*)'];

	}

	function number_of_non_free_customers()
	{
		// get the number of customers who are not free
		$query = "SELECT COUNT(*) FROM customer c
			LEFT JOIN billing b ON b.id = c.default_billing_id 
			LEFT JOIN billing_types bt ON b.billing_type = bt.id
			WHERE cancel_date is NULL AND bt.method <> 'free'";
		$result = $this->db->query($query) or die ("query failed");
		$myresult = $result->row_array();
		return $myresult['COUNT(*)'];
	}
}
