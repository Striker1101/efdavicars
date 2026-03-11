<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7ff; margin: 0; padding: 0; }
        .wrapper { padding: 40px 20px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .header { background-color: #1A1B3F; padding: 40px; text-align: center; }
        .content { padding: 40px; color: #1A1B3F; line-height: 1.6; }
        .label { font-size: 10px; text-transform: uppercase; letter-spacing: 2px; font-weight: 900; color: #A3D133; margin-bottom: 4px; }
        .value { font-size: 16px; font-weight: bold; margin-bottom: 24px; color: #1A1B3F; }
        .message-box { background: #F9FAFB; padding: 20px; border-left: 4px solid #A3D133; border-radius: 4px; font-style: italic; }
        .footer { background: #f9fafb; padding: 20px; text-align: center; font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1 style="color: #ffffff; margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 4px;">New Inquiry</h1>
            </div>
            <div class="content">
                <div class="label">From Name</div>
                <div class="value">{{ $data['name'] }}</div>

                <div class="label">Email Address</div>
                <div class="value">{{ $data['email'] }}</div>

                <div class="label">Subject</div>
                <div class="value">{{ $data['subject'] ?? 'General Inquiry' }}</div>

                <div class="label">Message</div>
                <div class="message-box">
                    "{{ $data['message'] }}"
                </div>
            </div>
            <div class="footer">
                &copy; {{ date('Year') }} Greney Car. This email was sent from your website contact form.
            </div>
        </div>
    </div>
</body>
</html>
