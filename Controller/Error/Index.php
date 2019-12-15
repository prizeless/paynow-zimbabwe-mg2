<?php

namespace Prizeless\PayNow\Controller\Error;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        // Error actions : redirect
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>Payment Error</title>
    <style type=\"text/css\">
        body {
            background-color:#fff;
            color: #f00;
            text-align: center;
        }
    </style>
</head>
<body>
    <p>We regret to tell you that your payment was not successful</p>
    <p>May you try again with different credentials</p>
</body>
</html>";
    }
}
