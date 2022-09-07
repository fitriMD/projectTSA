<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">

            <li class="active"> <a href="{{'/'}}">Home</a></li>
            <li> <a href="{{('/about')}}">About</a></li>
            <li> <a href="{{('/berita')}}">Berita</a></li>
            <li> <a href="{{('/layanan')}}">Layanan Publik</a></li>
            <li> <a href="{{('/contact')}}">Contact us</a></li>

        </ul>

    </nav>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

    });
</script>