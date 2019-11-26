<p>You have received a request for withdrawal. Please find the details below:</p>

<p>Customer Name: <b>{{ $email_data -> account_name }}</b></p>
<p>Amount: <b>{{ $email_data -> transfer_amount }}</b></p>
<p>Bank: <b>{{ $email_data -> bank_name }}</b></p>
<p>Bank Branch: <b>{{ $email_data -> bank_branch }}</b></p>
<p>Bank Account: <b>{{ $email_data -> account_number }}</b></p>
<p>SY reference number: <b>{{ $email_data -> ref_number_sy }}</b></p>
<p>PY reference number: <b>{{ $email_data -> ref_number_py }}</b></p>
