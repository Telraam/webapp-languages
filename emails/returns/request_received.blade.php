@extends('emails.layouts.app-branded')
@section('content')

    <tr>
        <td align="left" valign="top">
            <table border="0" cellpadding="10" cellspacing="0" width="100%" id="emailBody">

                <tr>
                    <td align="left" valign="top">

                        <h2>Return Request Confirmation (#{{ $returnRequest->id }})</h2>

                        <p>Dear {{ $returnRequest->firstname }} {{ $returnRequest->lastname }},</p>

                        <p>Thank you for submitting your return request. We’ve received the following details:</p>

                        <ul>
                            <li><strong>Type of Hardware:</strong> {{ $returnRequest->type_hardware }}</li>
                            <li><strong>Order Number:</strong> {{ $returnRequest->order_number ?? 'N/A' }}</li>
                            <li><strong>Reason for Return:</strong> {{ $returnRequest->reason_for_return }}</li>
                        </ul>

                        Please send the device to<br>
                        Telraam c/o returns<br>
                        Vital Decosterstraat 67A bus 1010<br>
                        3000 Leuven<br>
                        Belgium

                        <p>If you have any urgent questions, please reply to this email.</p>

                        Best regards,<br>
                         <strong>Your Support Team</strong><br>
                        <a href="mailto:support@telraam.net">support@telraam.net</a>

                    </td>
                </tr>

            </table>
        </td>
    </tr>

@endsection
