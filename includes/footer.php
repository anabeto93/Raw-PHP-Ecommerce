<br /> <br />
<footer class="text-center" id="footer">
    &copy; Copyright 2016-2019 <a href="https://humvite.com">Humvite Tech Solutions</a>
</footer>

<script>
    $(document).ready(function () {
        console.log('Ready for some UX actions');


    });

    $(window).scroll(function () {
        var vscroll = $(this).scrollTop();
        //console.log(vscroll);

        $('#logotext').css({
            "transform": `translate(-50%, ${0.85 * vscroll}px)`
        });

        $('#fore-flower').css({
            "transform": `translate(${vscroll / 5}px, -${vscroll / 12}px)`
        })
    });
</script>
</body>
</html>