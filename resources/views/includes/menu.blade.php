<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">My blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="my-2 navbar-nav ms-auto my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">หน้าหลัก</a></a>               
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">เกี่ยวกับ</a>               
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('service')}}">บริการ</a>               
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contact')}}">ติดต่อ</a>               
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">เข้าสู่ระบบ</a>               
                </li>
            </ul>
           
        </div>
    </div>
</nav>