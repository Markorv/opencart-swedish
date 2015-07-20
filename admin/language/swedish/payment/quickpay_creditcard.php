<?php
// Heading
$_['heading_title'] = 'Quickpay Creditcard';

// Text 
$_['text_payment'] = 'Payment';
$_['text_success'] = 'Success: You have modified Quickpay Checkout account details!';
$_['text_quickpay_creditcard'] = '<a onclick="window.open(\'http://quickpay.dk/about/\');"><img style="background:#28303a;" src="http://quickpay.net/gfx/layout/logo-inverse-sm.png" alt="Quickpay" title="Quickpay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization'] = 'Authorization';
$_['text_sale'] = 'Sale';
$_['text_edit'] = 'Edit ' . $_['heading_title'];

// Entry
$_['entry_status'] = 'Status:';
$_['entry_merchant'] = 'Merchant ID:';
$_['entry_language'] = 'Language:';
$_['entry_md5check'] = 'MD5 Key:';
$_['entry_protocol'] = 'Protocol:';
$_['entry_msgtype'] = 'Msgtype:';
$_['entry_autocapture'] = 'Autocapture:';
$_['entry_splitpayment'] = 'Splitpayment:';
$_['entry_cardtypelock'] = 'Cardtypelock:';
$_['entry_order_status_completed'] = 'Order Status after Completion:';
$_['entry_secret'] = 'Secret Key:';
$_['entry_payment_methods'] = 'Payment Methods:';

// Tooltips
$_['tooltip_status'] = 'Enable / Disable the payment gateway';
$_['tooltip_merchant'] =  'Type in your Quickpay merchant ID';
$_['tooltip_language'] = 'Set the payment window language';
$_['tooltip_md5check'] = 'Type in the secret MD5 hash key from Quickpay';
$_['tooltip_protocol'] = 'Set the Quickpay protocol. Recommended: 7';
$_['tooltip_msgtype'] = 'Set the msgtype. Recommended: authorize';
$_['tooltip_autocapture'] = 'Automatically auto capture a payment.';
$_['tooltip_cardtypelock'] = 'Set the cardtype lock.';
$_['tooltip_splitpayment'] = 'Enable split payments';
$_['tooltip_order_status_completed'] = 'Choose order state on paid orders.';

// Error
$_['error_permission']   = 'Warning: You do not have permission to modify Quickpay!';
$_['error_merchant'] = 'Merchant:';
$_['error_continueurl'] = 'Continueurl:';
$_['error_cancelurl'] = 'Cancelurl:';
$_['error_callbackurl'] = 'Callbackurl:';
$_['error_secret'] = 'Secret:';
$_['error_protocol'] = 'Protocol:';
$_['error_msgtype'] = 'Msgtype:';
$_['error_cardtypelock'] = 'Cardtypelock:';

?>