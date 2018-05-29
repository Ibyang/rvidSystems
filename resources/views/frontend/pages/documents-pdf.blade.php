<style type="text/css">
    table td, table th{
        border:1px solid black;
        width: 100%
    }
</style>

    <div>

        <div>
            <img src='storage/account/revid-billing-icon.png'/>
        </div>
        <br>
        @if($content['ID'] == 1)
            <h2>Terms and Conditions</h2>
        @elseif($content['ID'] == 2)
            <h2>Copyright</h2>
        @elseif($content['ID'] == 3)
            <h2>Privacy</h2>
        @endif

        @if($content['content_text'] != null)
            {!! $content['content_text'] !!}
        @endif
    </div>


