<?php

// define variables used in notices if undefined
if (!isset($payment_due_date)) { $payment_due_date = ""; }
if (!isset($total_owed)) { $total_owed = ""; }
if (!isset($cancel_date)) { $cancel_date = ""; }
if (!isset($turnoff_date)) { $turnoff_date = ""; }
if (!isset($phone_billing)) { $phone_billing = ""; }

// US-English translation


$l_january = "Jan";
$l_february = "Feb";
$l_march = "Mar";
$l_april = "Apr";
$l_may = "May";
$l_june = "Jun";
$l_july = "Jul";
$l_august = "Aug";
$l_september = "Sep";
$l_october = "Oct";
$l_november = "Nov";
$l_december = "Dec";

$l_account = "Account";
$l_accountnum = "Account Num";
$l_accountnumber = "Account Number";
$l_acctmngrpasswd = "Acct Mngr Passwd";
$l_activatenotify = "Activate Notify";
$l_activationstring = "Activation String";
$l_active = "Active";
$l_add ="Add";
$l_addcreditfor = "Add Credit for";
$l_addaltbilling = "Add Alternate Billing";
$l_addbilling = "Add Billing";
$l_added = "Added";
$l_addedservice = "Added Service";
$l_addingservice = "Adding Service";
$l_addmember = "Add Member";
$l_addmodule = "Add Module";
$l_addnewgroup = "Add New Database Group Member";
$l_addnewcustomer = "Add New Customer";
$l_addnewlink = "Add New Link";
$l_addnewservice = "Add New Service";
$l_addnewuser = "Add New Database User";
$l_addresschange = "The address has changed, would you like to update the billing record also?";
$l_addservice = "Add Service";
$l_addpermission = "Add Permission";
$l_admin = "Admin";
$l_again = "Again";
$l_alt_phone = "Alternate Phone";
$l_altbillingtypes = "Alternative Billing Types";
$l_amount = "Amount";
$l_amount_due = "Amount Due";
$l_applytodefaultbillingid = "Apply to default billing id";
$l_applytospecificbillingid = "Apply to specific billing id";
$l_applytospecificinvoice = "Apply to specific invoice";
$l_areyousureadd = "Are you sure you want to add a new record?";
$l_areyousureauthorized = "Are you sure you want to set this account to Authorized";
$l_areyousurecreateinvoice = "Are you sure you want to create an invoice";
$l_areyousurecancel = "Are you sure you want to cancel customer";
$l_areyousurecancelwfee = "Are you sure you want to set this account to Cancel w/Fee";
$l_areyousurecollections = "Are you sure you want to set this account to Collections";
$l_areyousureuncancel = "Are you sure you want to uncancel customer";
$l_areyousuredelete = "Are you sure you want to delete";
$l_areyousuredeletepayment = "Are you sure you want to delete this payment entry?";
$l_areyousurensf = "Are you sure you want to mark this for Non-sufficient funds";
$l_areyousurereruncreditcard = "Are you sure you want to rerun this credit card";
$l_areyousureturnedoff = "Are you sure you want to set this account to Turned Off?";
$l_areyousurewaiting = "Are you sure you want to set this account to Waiting";
$l_areyousuredefaultbillingaddress = "Are you sure you want to set the default billing address to the customer address";
$l_areyousureyouwanttoremoveinvoice = "Are you sure you want to remove invoice number";
$l_areyousureyouwanttoremovethegroupid = "Are you sure you want to remove the group id";
$l_areyousureyouwanttoremovetheuserid = "Are you sure you want to remove the user id";
$l_assign = "Assign";
$l_assigned = "Assigned";
$l_automatic = "Automatic";
$l_automaticreceipt = "Automatic Receipt";
$l_authorized = "Authorized";
$l_avs = "AVS";
$l_back = "Back";
$l_bad_debt = "Bad Debt";
$l_batch = "Batch";
$l_beforeyoucanaddanewmodule = "Before you can add a new module you must put your new module folder inside";
$l_belongsto = "Belongs To";
$l_billedamount = "Billed Amount";
$l_billing = "Billing";
$l_billingcompany = "Billing Company";
$l_billingdate = "Billing Date";
$l_billingdaterollovertime = "Billing Date Rollover Time";
$l_billingemail = "Billing Email";
$l_billingid = "Billing ID";
$l_billingnotify = "Billing Notify";
$l_billingphone = "Billing Phone";
$l_billingstatus = "Billing Status";
$l_billingtype = "Billing Type";
$l_billingweekend_sunday = "Sunday Weekend";
$l_billingweekend_monday = "Monday Weekend";
$l_billingweekend_tuesday = "Tuesday Weekend";
$l_billingweekend_wednesday = "Wednesday Weekend";
$l_billingweekend_thursday = "Thursday Weekend";
$l_billingweekend_friday = "Friday Weekend";
$l_billingweekend_saturday = "Saturday Weekend";
$l_cancel = "Cancel";
$l_cancelcustomer = "Cancel Customer";
$l_canceldate = "Cancel Date";
$l_cancelreason = "Cancel Reason";
$l_canceled = "Canceled";
$l_cancelwithfee = "Canceled w/Fee";

$l_cancel_notice = "Cancel Notice";
$l_cancel_subject = "Your Account has been Canceled";
$l_cancel_heading = "Your account has been suspended for payment issues.  The following amounts are past due";
$l_cancel_footer = "Please contact us to resolve this issue";

$l_cannotclose = "Cannot Close";
$l_cannotopen = "Cannot Open";
$l_carrierdependent = "Carrier Dependent";
$l_carrierdependentcancelurl = "Carrier Dependent Cancel URL";
$l_carrierdependentmessage = "This customer has carrier dependent services.  They must be canceled using the third party carrier form";
$l_category = "Category";
$l_ccexpire = "Credit Card Expire";
$l_ccnumber = "Credit Card Number";
$l_change = "Change";
$l_changeservice = "Change Service";
$l_changestatus = "Change Status";
$l_changessaved = "Changes Saved";
$l_changepassword = "Change Password";
$l_changeyourpassword = "Change Your Password";
$l_checknotes = "Check Notes";
$l_checknumber = "Check Number";
$l_choose = "Choose One...";
$l_choosefrom = "Choose From";
$l_ciphertext = "Ciphertext";
$l_city = "City";
$l_clickheretotryagain = "Click here to try again";
$l_closed_by = "Closed By";
$l_collections = "Collections";
$l_collections_heading = "The following services have been canceled";
$l_collections_notice = "Collections Notice";
$l_collectionsinvoicenote = "Collections Invoice Note";
$l_commonname = "Common Name";
$l_company = "Company";
$l_companyname = "Company Name";
$l_completed = "Completed";
$l_completedin = "Completed In";
$l_contactemail = "Contact Email";
$l_country = "Country";
$l_create = "Create";
$l_createdby = "Created By";
$l_createdby = "Created By";
$l_createinvoice = "Create Invoice";
$l_createdinvoice = "Created invoice for";
$l_createdon = "Created On";
$l_creation = "Creation";
$l_creationdate = "Creation Date";
$l_credit = "Credit";
$l_creditcard = "Credit Card";
$l_creditcardexportvars = "Credit Card Export Variable Order";
$l_foroverpayment = "for overpayment";
$l_foritemsbilledduringthisperiod = "For items billed during this period";
$l_currency = "&#36;";
$l_current = "current";
$l_customer = "Customer";
$l_customeraccountmanager = "Customer Account Manager";
$l_customername = "Customer Name";
$l_customerrecord = "Customer Record";
$l_customerservice = "Customer Service";
$l_customerserviceemail = "Customer Service Email";
$l_customerservicephone = "Customer Service Phone";
$l_customersummary = "Customer Summary";
$l_database = "Database";
$l_databaseversion = "Citrus Database Version";
$l_date = "Date";
$l_datetime = "Date Time";
$l_days = "Days";
$l_dayspastdue = "Days Past Due";
$l_declined = "Declined";
$l_declined2x = "Declined 2X";
$l_declined_subject = "Declined Subject";
$l_declined_message = "Declined Message";
$l_declinedmessagesentto = "Declined message sent to ";
$l_defaultbillingid = "Default Billing ID";
$l_defaultbillinggroup = "Default Billing Group";
$l_defaultgroup = "Default Group";
$l_defaultinvoicenote = "Default Invoice Note";
$l_defaultshippinggroup = "Default Shipping Group";
$l_delete = "Delete";
$l_deleted = "Deleted";
$l_deletegroup = "Delete Group";
$l_deleteservice = "Delete Service";
$l_deleteservice_removeuser = "Delete service, remove user on";
$l_deleteservice_removetoday = "Delete service, remove user today";
$l_deleteservice_activeuser = "Delete service, user stays active";
$l_deleteuser = "Delete User";
$l_description = "Description";
$l_detail1 = "Detail 1";
$l_detail2 = "Detail 2";
$l_details = "Details";
$l_disablebilling = "Disable Billing";
$l_discount = "Discount";
$l_done = "done";
$l_donotreactivate = "Do Not Reactivate";
$l_download = "Download";
$l_download_pdf = "Download pdf";
$l_duedate = "Due Date";
$l_edit = "Edit";
$l_editbillingtypes = "Edit Billing Types";
$l_editcustomer = "Edit Customer";
$l_editdefaultbilling = "Edit Default Billing";
$l_editfieldassets = "Edit Field Asset Types";
$l_editmodules = "Edit Modules";
$l_editservices = "Edit Services";
$l_edituser = "Edit User";
$l_einvoice = "Electronic Invoice from";
$l_email = "email";
$l_email_support_notification = "Email Support Notification";
$l_im_support_notification = "IM Support Notification";
$l_email_heading_thankyou = "Thank you for subscribing to";
$l_email_heading_presenting = "Your invoice is presented below.  Please send a check or money order for";
$l_email_heading_include = "Please include your account number with your payment";
$l_emailinvoices = "Email New Invoices";
$l_ended = "Ended";
$l_enteroneofthesethreevalues = "Enter one of these three values";
$l_enterpayments = "Enter Payments";
$l_entry_type = "Entry Type";
$l_entry_date = "Entry Date";
$l_error = "ERROR";
$l_error_account_not_canceled = "Error: The account must be canceled first";
$l_exampleequipment = "Example Service";
$l_examplepassword = "Example Password";
$l_exampleusername = "Example Username";
$l_exempt = "Exempt";
$l_exemptreport = "Exempt Report";
$l_exp = "Exp";
$l_expirationdate = "Expiration Date";
$l_exportcreditcards = "Export Credit Cards";
$l_exportfileprefix = "Export File Prefix";
$l_exportpreviousbatchid = "Export Previous Batch ID";
$l_extended = "extended";
$l_fax = "Fax";
$l_fileuploaded = "File Uploaded";
$l_finished = "Finished";
$l_fixbillingfrequencyerror = "Fix Billing Frequency Error";
$l_found = "Found";
$l_foundset = "Found Set";
$l_free = "Free";
$l_freq = "Freq";
$l_frequency = "Frequency";
$l_from = "From";
$l_fullcontrol = "Full Control";
$l_generalconfiguration = "Organization Configuration";
$l_groups = "Groups";
$l_groupname = "Group Name";
$l_help = "Help";
$l_hideonline = "Hide Online";
$l_history = "History";
$l_home = "Home";
$l_html = "html";
$l_id = "ID";
$l_iffield = "If Field";
$l_ifvalue = "If Value";
$l_import = "Import";
$l_importccupdates = "Credit Card Changes";
$l_importcreditcards = "Import Credit Cards";
$l_importfile = "Import File";
$l_importnewaccounts = "Import New Accounts";
$l_initialdecline = "Initial Decline";
$l_invoice = "Invoice";
$l_invoice_footer = "Invoice Footer";
$l_invoicemaintenance = "Invoice Maintenance";
$l_invoicenum = "Invoice Num";
$l_invoicenumber = "Invoice Number";
$l_invoiceornotice = "Invoice or Notice";
$l_itshouldbesetto = "it should be set to";
$l_last = "Last";
$l_latefee = "Late Fee";
$l_leftover = "Left over";
$l_link = "Link";
$l_linkservice = "Link Service";
$l_linkservices = "Link Services";
$l_listview = "list view";
$l_login = "Login";
$l_loginagain = "Login Again";
$l_logintext = "Enter your username and password";
$l_logout = "Logout";
$l_manager = "Manager";
$l_mark_as_nsf = "Mark as NSF";
$l_masked_ccnumber = "Masked Credit Card Number";
$l_membername = "Member Name";
$l_merge = "Merge";
$l_merged = "Merged";
$l_mergeaccounts = "Merge Accounts";
$l_method = "Method";
$l_method_warning = "You must manually process a refund for this billing method";
$l_messagesent = "Message Sent";
$l_modify = "Modify";
$l_modifynotify = "Modification Notify";
$l_module = "Module";
$l_modules = "Modules";
$l_modulename = "Module Name";
$l_modulepermissions = "Module Permissions";
$l_moredetail = "More Detail";
$l_name = "Name";
$l_new = "New";
$l_newcharges = "New Charges";
$l_newmessage = "New Messages";
$l_newpassword = "New Password";
$l_next = "Next";
$l_nextbillingdate = "Next Billing Date";
$l_no = "No";
$l_nobody = "Nobody";
$l_noinventory = "No Inventory";
$l_notdone = "Not Done";
$l_noteto = "Note to";
$l_notes = "Notes";
$l_notesforgroups = "Notes for Groups";
$l_notesforuser = "Notes for User";
$l_notexempt = "Not Exempt";
$l_notifications = "Notifications";
$l_notify = "Notify";
$l_notrenewed = "Not Renewed";
$l_notvalid = "Not Valid";
$l_number = "Number";
$l_of = "of";
$l_ok = "ok";
$l_oldpassword = "Old Password";
$l_onlineservicerequest = "Online Service Request";
$l_onlinesupportrequest = "Online Support Request";
$l_onetimebilled = "One Time Billed";
$l_openticket = "Open Ticket";
$l_optionstable = "Options/Attributes Table";
$l_optionstables = "Options/Attributes Tables";
$l_or = "Or";
$l_oremail = "or email";
$l_original = "Original";
$l_organizationname = "Billed By";
$l_orgmismatch = "Organization Mismatch";
$l_over = "Over";
$l_noticesent = "Notice Sent";

$l_notice_text_pastdue = "Your payment was due on $payment_due_date. Please submit payment of $total_owed";

$l_notice_text_shutoff = "Your service is scheduled for suspension on $turnoff_date due to billing issues.  Please pay the total amount due to avoid interruption of your service.  Billing fees still accrue during this period.";

$l_notice_footer_shutoff = "If payment is not received by $cancel_date your account will be canceled with all fees still due plus any additional fees due.  To retain service after the cancel date will require payment of all fees due and then re-order of new service.";

$l_notice_text_cancel = "If payment is not received by $cancel_date your account will then be canceled and collections activity will begin.  Additional fees will apply for all collections activity.  Once the account is cancelled it will require re-ordering to obtain service again.";

$l_notice_text_collections = "Your account has been canceled for payment issues. Attached are the fees that must be paid in full by $cancel_date.  Once payment is received you may re-order service.  If payment is not received by $cancel_date, collections activity will begin.  Additional fees will apply for all collections activity.";

$l_notice_text_footer = "Please call in with a credit card payment to $phone_billing or mail payment to the address below.  Billing fees still accrue during this period.  PLEASE ALWAYS PUT YOUR ACCOUNT OR INVOICE NUMBER ON PAYMENT TO BE SURE IT IS APPLIED CORRECTLY";

$l_collections_text_footer = "Please call in with a credit card payment to $phone_billing or mail payment to the address below.  PLEASE ALWAYS PUT YOUR ACCOUNT OR INVOICE NUMBER ON PAYMENT TO BE SURE IT IS APPLIED CORRECTLY";

$l_page = "Page";
$l_paid = "Paid";
$l_paidamount = "Paid Amount";
$l_paidandactive = "Paid and Still Active";
$l_paidsubscriptions = "Paid Subscriptions";
$l_passphrase = "Passphrase";
$l_password = "Password";
$l_passwordchanged = "Password Changed";
$l_passwordsdonotmatch = "Passwords do not match";
$l_pastcharges = "Past Charges";
$l_pastdue = "Past Due";
$l_pastdue_notice = "Past Due Notice";
$l_pastdue_subject = "Your Account is Past Due";
$l_pastdue_heading = "The follwing services are Past Due";
$l_pastdue_footer = "Please contact us to resolve this issue";
$l_pastduedays = "Past Due Days";
$l_pastdueexempt = "Past Due Exempt";
$l_pastdueinvoicenote = "Past Due Invoice Note";
$l_pastduereport = "Past Due Report";
$l_pastweek = "Past Week";
$l_past3months = "Past 3 Months";
$l_past2years = "Past 2 Years";
$l_pathtocreditcardfile = "Path To Credit Card File";
$l_paybillonline = "Pay Bill Online";
$l_paymentdue = "Payment Due";
$l_paymentduedate = "Payment Due Date";
$l_paymentid = "Payment ID";
$l_payments = "Payments";
$l_paymentreceipt = "Payment Receipt";
$l_paymentreport = "Payment Report";
$l_paymentsaved = "Payment Saved";
$l_paymentstatus = "Payment Status";
$l_pdf = "pdf";
$l_pending = "Pending";
$l_percentage_or_fixed = "Tax Calculation";
$l_permission = "Permission";
$l_phone = "Phone";
$l_phonenumber = "Phone Number";
$l_pleaseseeourterms = "Please see our terms of service on our website for more information";
$l_po_number = "PO Number";
$l_postbilled = "Post Billed";
$l_prepay = "Prepay";
$l_prepaycc = "Prepay CC";
$l_prevbillingdate = "Prev Billing Date";
$l_previous = "Previous";
$l_price = "Price";
$l_print = "Print";
$l_printinvoices = "Print New Invoices";
$l_printnotices = "Print Notices";
$l_printwelcomeletters = "Welcome Letters";
$l_privileges = "Privileges";
$l_processcreditcards = "Process Credit Cards";
$l_processoutstandingrefunds = "Would you like to process outstanding refunds?";
$l_processing = "Processing";
$l_profile = "Profile";
$l_queryfailed = "Query Failed";
$l_rate = "Rate";
$l_ready = "Ready";
$l_receipt = "Receipt";
$l_recentbilling = "Recent Billing";
$l_recentdeclines = "Recent Declines";
$l_recentpayments = "Recent Payments";
$l_recordview = "record view";
$l_refund = "Refund";
$l_refundamount = "Refund Amount";
$l_refunddate = "Refund Date";
$l_refunded = "Refunded";
$l_refundreport = "Refund Report";
$l_reminderdate = "Reminder Date";
$l_removaldate = "Removal Date";
$l_remove = "Remove";
$l_removed = "Removed";
$l_remove_now = "Remove Now";
$l_removepermissions = "Remove Permissions";
$l_replace = "Replace";
$l_reports = "Reports";
$l_rerun = "Rerun";
$l_rerundateerror = "Rerun date error, this account will be billed normally according to their next billing date";
$l_rerunitemerror = "No Items to Rerun Found"; 
$l_resetaddresstocustomer = "Reset Address To Customer";
$l_response = "Response";
$l_results_per_page = "Results Per Page";
$l_returndate = "Return Date";
$l_returndevice = "Return Device";
$l_returned = "Returned";
$l_returnnotes = "Return Notes";
$l_returninventory = "Return Inventory";
$l_revenuereport = "Revenue Report";
$l_salesemail = "Sales Email";
$l_salesperson = "Salesperson";
$l_salesphone = "Sales Phone";
$l_saletype = "Sale Type";
$l_savechanges = "Save Changes";
$l_screenname = "Screenname (JID)";
$l_search = "Search";
$l_seconds = "Seconds";
$l_secret_answer = "Secret Answer";
$l_secret_question = "Secret Question";
$l_select = "select";
$l_selectcategory = "Select Category...";
$l_sellingactive = "Selling Active";
$l_send_cancel_notice_question = "Send cancel notice to cancel on";
$l_send_shutoff_notice_question = "Send notice to shutoff on";
$l_send_collections_notice_question = "Send collections notice?";
$l_sendreminders = "Send Reminders";
$l_sent_cancel_notice_answer = "Sent cancel notice to";
$l_sent_shutoff_notice_answer = "Sent shutoff notice to";
$l_sent_collections_notice_answer = "Sent collections notice to";
$l_sentrequesttoaddnew = "Sent request to add new";
$l_serialnumber = "Serial Number";
$l_service = "Service";
$l_servicereport = "Service Report";
$l_services = "Services";
$l_serviceid = "Service ID";
$l_servicegrowth = "Service Churn";
$l_settings = "Settings";
$l_showall = "Show All";
$l_showlast50 = "Show Last 50";
$l_shownewaccounts = "Activate Accounts";
$l_ship = "Ship";
$l_shipped = "Shipped";
$l_shipfieldasset = "Ship Field Asset";
$l_shippingdate = "Shipping Date";
$l_shutoffnotice = "Shutoff Notice";
$l_shutoffnotify = "Shutoff Notify";

$l_shutoff_notice = "Shutoff Notice";
$l_shutoff_subject = "Your Account will be Shutoff";
$l_shutoff_heading = "The following services are scheduled for shutoff";
$l_shutoff_footer = "Please contact us to resolve this issue";

$l_signupdate = "Signup Date";
$l_signupdaterange = "Signup Date Range";
$l_softwareversion = "Citrus Software Version";
$l_sorrynorecordsfound = "Sorry No Records Found";
$l_sortorder = "Sort Order";
$l_source = "Source";
$l_sourcereport = "Source Report";
$l_started = "Started";
$l_state = "State";
$l_status = "Status";
$l_stillowed = "Still Owed";
$l_street = "Street";
$l_submit = "Submit";
$l_submitrequest = "Submit Request";
$l_support = "Support";
$l_supportnotify = "Support Notify";
$l_supportrequest = "Support Request";
$l_tax = "Tax";
$l_taxamount = "Tax Amount";
$l_taxdescription = "Tax Description";
$l_taxedservices = "Taxed Services";
$l_taxes = "Taxes";
$l_taxesandfees = "Taxes & Fees";
$l_taxexempt = "Tax Exempt";
$l_taxexemptid = "Tax Exempt ID";
$l_taxrateid = "Tax Rate ID";
$l_taxrates = "Tax Rates";
$l_thankyouforordering = "Thank you for ordering the following services";
$l_ticketnumber = "Ticket #";
$l_title = "CitrusDB";
$l_to_lc = "to";
$l_to = "To";
$l_todaysnewaccounts = "Today's New Accounts";
$l_togroupnamed = "To Group Named";
$l_tools = "Tools";
$l_total = "Total";
$l_totalcustomers = "Total number of customers";
$l_totalpayingcustomers = "Total paying customers";
$l_totaxrate = "To Tax Rate";
$l_trackingnumber = "Tracking Number";
$l_trackpackage = "Track Package";
$l_turnoff = "Turnoff";
$l_turnoff_notice = "Turnoff Notice";
$l_turnoff_subject = "Your Account is Turned Off";
$l_turnoff_heading = "The follwing services are turned off";
$l_turnoff_footer = "Please contact us to resolve this issue";

$l_turnedoff = "Turned Off";
$l_turnedoffinvoicenote = "Turned Off Invoice Note";
$l_type = "Type";
$l_uncancelcustomer = "Uncancel Customer";
$l_undelete = "Undelete";
$l_undochanges = "Undo Changes";
$l_unlink = "Unlink";
$l_unpaid = "Unpaid";
$l_unpaidandactive = "Unpaid and Still Active";
$l_unpaidstatus = "Unpaid Status";
$l_uploadcomplete = "Upload Complete";
$l_usage = "Usage";
$l_usagelabel = "Usage Label";
$l_usagemultiple = "Measured Usage";
$l_used = "Used";
$l_user = "User";
$l_userid = "User ID";
$l_username = "Username";
$l_users = "Users";
$l_valid = "Valid";
$l_validate = "validate";
$l_vendor_bill_id = "Vendor Bill ID";
$l_vendor_cost = "Vendor Cost";
$l_vendor_from_date = "Vendor From Date";
$l_vendor_history = "Vendor History";
$l_vendor_invoice_number = "Vendor Invoice Number";
$l_vendor_item_id = "Circuit ID";
$l_vendor_name = "Vendor Name";
$l_vendor_tax = "Vendor Tax";
$l_vendor_to_date = "Vendor To Date";
$l_version = "Version";
$l_view = "View";
$l_waiting = "Waiting";
$l_weight = "Weight (lbs)";
$l_whatdatewouldyouliketoremind = "What date would you like to remind";
$l_whatdatewouldyouliketobill = "What date would you like to run";
$l_whatidwouldyouliketobill = "What billing ID would you like to bill";
$l_whataccountnumberwouldyouliketobill = "What account number would you like to bill";
$l_whycanceling = "What is the primary reason for canceling your service?";
$l_willcreatebillingrecord = "Will create billing record for";
$l_wrotefile = "Wrote File";
$l_yes = "Yes";
$l_youareloggedinas = "You are logged in as";
$l_youarenowloggedout = "You Are Now Logged Out";
$l_youmusthaveadmin = "You must have admin privileges to use this feature";
$l_yourpathtocitrusisincorrect = "Your path_to_citrus variable is incorrect";
$l_yourserviceisactive = "Your service is active and ready for use.  If you have any questions please call";
$l_zip = "Zip";


