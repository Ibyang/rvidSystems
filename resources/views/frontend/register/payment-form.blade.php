<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmTransaction" id="frmTransaction">
    <input type="hidden" name="business" value="{{$paypal_id}}">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="{{$payment_arr['item_name']}}">
    <input type="hidden" name="item_number" value="{{$payment_arr['item_number']}}">
    <input type="hidden" name="amount" value="{{$payment_arr['amount']}}">
    <input type="hidden" name="currency_code" value="USD">
    <input type='hidden' name='rm' value='2'>
    <input type="hidden" name="cancel_return" value=" {{ route('payment-cancel') }}">
    <input type="hidden" name="return" value="{{ route('payment-status') }}">
</form>
<script>
    document.frmTransaction.submit();
</script>