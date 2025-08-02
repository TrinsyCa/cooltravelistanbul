@extends('app')
@section('title')
    Policies {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'Policies')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/policies.css') }}">
@endsection
@section('content')
    <br>
    <section class="detailGroup section-container">
        <div class="detailGroup-container">
            <div class="detailGroupBox">
                <div class="detailGroupTop">
                    <div class="detailGroupTitle">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-shield" class="svg-inline--fa fa-file-shield sc-9cab717c-13 ihRNyb" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" color="#000000" data-darkreader-inline-color="" style="--darkreader-inline-color: #fffdf9;"><path fill="currentColor" d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v47l-92.8 37.1c-21.3 8.5-35.2 29.1-35.2 52c0 56.6 18.9 148 94.2 208.3c-9 4.8-19.3 7.6-30.2 7.6H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm39.1 97.7c5.7-2.3 12.1-2.3 17.8 0l120 48C570 277.4 576 286.2 576 296c0 63.3-25.9 168.8-134.8 214.2c-5.9 2.5-12.6 2.5-18.5 0C313.9 464.8 288 359.3 288 296c0-9.8 6-18.6 15.1-22.3l120-48zM527.4 312L432 273.8V461.7c68.2-33 91.5-99 95.4-149.7z" data-darkreader-inline-fill="" style="--darkreader-inline-fill: currentColor;"></path></svg>
                        <h1>Terms & Policies</h1>
                    </div>
                </div>
                <div class="detailGroupParagraph">
                    <h3>1. Introduction</h3>
                    <p>Welcome to Cool Travel Istanbul. By using our services, you agree to the following terms and policies. Please read them carefully before making a booking.</p>

                    <h3>2. Booking & Payment</h3>
                    <p>All reservations must be made in advance through our website, WhatsApp, or phone.</p>
                    <p>Payments can be made via credit card, bank transfer, or cash upon service.</p>
                    <p>A confirmation message will be sent after booking is completed.</p>

                    <h3>3. Cancellation & Refund Policy</h3>
                    <p>Cancellations made <strong>at least 24 hours before</strong> the scheduled service will receive a full refund.</p>
                    <p>Cancellations made <strong>less than 24 hours before</strong> the service are non-refundable.</p>
                    <p>In case of unexpected events (e.g., flight delays, force majeure), we may offer flexible rescheduling options.</p>

                    <h3>4. Service & Safety</h3>
                    <p>Our vehicles are regularly maintained and comply with all safety regulations.</p>
                    <p>Passengers must follow all safety guidelines provided by our drivers.</p>
                    <p>We reserve the right to refuse service to individuals violating our policies or acting inappropriately.</p>

                    <h3>5. Privacy Policy</h3>
                    <p>Your personal data is collected only for booking purposes and is never shared with third parties.</p>
                    <p>Payment information is securely processed through encrypted systems.</p>

                    <h3>6. Liability Disclaimer</h3>
                    <p>Cool Travel Istanbul is not responsible for any loss, damage, or delays caused by unforeseen circumstances.</p>
                    <p>Passengers are responsible for their personal belongings during the trip.</p>

                    <h3>7. Changes to Terms & Policies</h3>
                    <p>We reserve the right to update these terms at any time.</p>
                    <p>Any changes will be communicated via our website or email.</p>

                    <p>For any questions, please contact us via <strong>WhatsApp (+90 530 126 71 53)</strong> or email.</p>
                </div>
            </div>
            <div class="detailGroupBox">
                <div class="detailGroupTop">
                    <div class="detailGroupTitle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><path fill="currentColor" d="M13 0C9.155 0 6 3.155 6 7v1H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2h-1V7c0-3.845-3.155-7-7-7m0 2c2.755 0 5 2.245 5 5v1H8V7c0-2.755 2.245-5 5-5m0 9c2.8 0 5 2.2 5 5s-2.2 5-5 5s-5-2.2-5-5s2.2-5 5-5m0 2c-1.7 0-3 1.3-3 3s1.3 3 3 3s3-1.3 3-3c0-.3-.094-.606-.094-.906c-.3.5-.806.906-1.406.906c-.8 0-1.5-.7-1.5-1.5c0-.6.406-1.106.906-1.406c-.3 0-.606-.094-.906-.094"/></svg>
                        <h1>Privacy Policy</h1>
                    </div>
                </div>
                <div class="detailGroupParagraph">
                    <h3>1. Introduction</h3>
                    <p>At <strong>Cool Travel Istanbul</strong>, we value your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and safeguard your information when you use our services.</p>

                    <h3>2. Information We Collect</h3>
                    <p>We may collect the following types of personal information:</p>
                    <ul>
                        <li><strong>Contact Information:</strong> Name, phone number, email address</li>
                        <li><strong>Booking Details:</strong> Pickup and drop-off locations, travel dates</li>
                        <li><strong>Payment Information:</strong> Processed securely via third-party payment providers</li>
                        <li><strong>Communication Records:</strong> Messages and inquiries through WhatsApp, email, or website</li>
                    </ul>

                    <h3>3. How We Use Your Information</h3>
                    <p>Your personal data is used strictly for:</p>
                    <ul>
                        <li><strong>Processing bookings and payments</strong></li>
                        <li><strong>Providing customer support and assistance</strong></li>
                        <li><strong>Improving our services based on feedback</strong></li>
                        <li><strong>Complying with legal and regulatory requirements</strong></li>
                    </ul>
                    <p>We do not sell, rent, or share your personal information with third parties, except when required by law.</p>

                    <h3>4. Data Security</h3>
                    <p>We take appropriate security measures to protect your data from unauthorized access, alteration, or disclosure. Your payment details are encrypted and processed through secure platforms.</p>

                    <h3>5. Cookies & Tracking Technologies</h3>
                    <p>Our website may use cookies to enhance user experience and analyze traffic. You can disable cookies in your browser settings if preferred.</p>

                    <h3>6. Third-Party Services</h3>
                    <p>We may use third-party platforms (such as WhatsApp, payment processors, and booking systems) to provide our services. These providers have their own privacy policies, which we recommend reviewing.</p>

                    <h3>7. Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Request access to the personal data we hold about you</li>
                        <li>Request correction or deletion of your data</li>
                        <li>Withdraw consent for data processing (except when required by law)</li>
                    </ul>

                    <h3>8. Policy Updates</h3>
                    <p>This Privacy Policy may be updated periodically. Changes will be posted on our website, and continued use of our services indicates acceptance of the revised terms.</p>

                    <p>For any questions regarding your privacy, please contact us via <strong>WhatsApp (+90 530 126 71 53)</strong> or email.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
