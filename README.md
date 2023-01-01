# Sending email with PHP: from Basic to Advanced

## Content

- [x] using PHPMailer to send email form PHP
  - install the PHPMailer library with composer
  - [Enabling debug output in PHPMailer](https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting#enabling-debug-output)
  - [Troubleshooting PHPMailer](https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting)
  - configure PHPMailer with your SMTP server
  - put configuration settings in a separate file
- [x] how to use PHPMailer to send emails
  - add a name to an email address
  - send email to multiple recipients using To, CC and Bcc
  - send an email with a different address for replies
  - send email containing non-english characters
  - [Maximum email size limits](https://www.outlook-apps.com/maximum-email-size/)
  - send email with a file attachment
  - send an email with a file attachment and change the filename
- [ ] using HTML and CSS to add formatting to your emails
  - format the body of an email using HTML
  - insert an image into the body of an email
  - add style to the HtML in an email using CSS
  - [Universally supported CSS and HTML for email designs](http://pinpointe.com/blog/email-campaign-html-and-css-support/)
  - [CSS support guide for email clients](https://www.campaignmonitor.com/css/)
  - [Email testing](https://www.litmus.com/)
  - [Email testing and analytics](https://www.emailonacid.com/)
  - [Free email templates](https://www.campaignmonitor.com/email-templates/)
  - add a Plain-text version of an HTML email
  - [HTML to Text email converter](https://templates.mailchimp.com/resources/html-to-text/)
  - [PHP strip_tags function](https://www.php.net/manual/en/function.strip-tags.php)
- [ ] sending emails asynchronously: build a basic asynchronous queue from scratch
  - why it takes a long time to send an email using SMTP
  - [Email testing](http://ajaxload.info/)
  - send email quickly form a web page
  - [PHP uniqid function](https://www.php.net/manual/en/function.uniqid.php)
  - [PHP serialize function](https://www.php.net/manual/en/function.serialize.php)
  - queue emails to be sent later: save emails in text files
- [ ] sending emails asynchronously using the RabbitMQ Messaging Server
- [ ] third-party email services: using mailgun