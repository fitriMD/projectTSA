<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-arrow-left"></i>
        </div>

        <ul class="list-unstyled components">

            <li class="active"> <a href="{{'/'}}">Home</a></li>
            <li> <a href="{{('/about')}}">About</a></li>

            <li class="menu-item-has-children dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                        class="menu-icon fa fa-newspaper-o"></i>Layanan Publik</a>
                <ul class="sub-menu children dropdown-menu" style="margin-left:-20px; width: 500px; height: 1100px;">
                    <li> <a href="layanankk">
                            Kartu Keluarga
                        </a>
                    </li>
                    <li> <a href="layananktp">
                            Kartu Tanda Penduduk
                        </a>
                    </li>
                </ul>
            </li>
            <li> <a href="{{('/berita')}}">Berita</a></li>
            <li> <a href="{{('/contact')}}">Contact us</a></li>
            <li> <a href="{{ route('login') }}">Login Admin</a></li>

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