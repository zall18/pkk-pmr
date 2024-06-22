<nav class="d-flex justify-content-between align-items-center position-fixed z-3 bg-white" style="z-index: 2">
    <div class="logo">
        <img src="{{ asset('images/pmr-removebg.png') }}" alt="" srcset="">
    </div>
    <div class="pt-5 rounded mb-5 fw-bold" id="navigation">
        <ul class="d-flex p-0 justify-content-evenly align-items-center">
            <li><a href="/" class="pe-4 border-end border-white"><i class="fi fi-rr-home"></i>Home</a></li>
            <li><a href="/video" class="pe-4 border-end border-white"><i class="fi fi-rr-play"></i>Video</a></li>
            <li><a href="/image"class="pe-4 border-end border-white"><i class="fi fi-rr-apps"></i>Gambar</a></li>
            <li><a href="/article" class="pe-4 border-end border-white"><i class="fi fi-rr-book-alt"></i>Article</a></li>
            <li><a href="/category" class="pe-4 border-end border-white"><i class="fi fi-rr-list"></i>Category</a></li>
            <li>
                @if(Session::has('active'))
                    <a href="/admin" class="m-0"><i class="fi fi-rr-lock"></i>Dashboard</a>
                @else
                    <a href="/loginPage" class="m-0"><i class="fi fi-rr-lock"></i>Login</a>
                @endif
            </li>


        </ul>
    </div>
    <div class="d-flex pt-2 me-4">
        <p id="hours">00</p>
        <p>:</p>
        <p id="minutes">00</p>
    </div>
    </div>
    <script>
        var hour = document.getElementById('hours');
        var minute = document.getElementById('minutes');
        var jamDigital = setInterval(
            function time() {
                var date_now = new Date();
                var jm = date_now.getHours();
                var mn = date_now.getMinutes();
    
                if(jm<10){
                    jm = '0'+jm;
                }
                if(mn<10){
                    mn = '0'+mn;
                }
    
                hour.textContent = jm;
                minute.textContent = mn;
               
        });
    
    </script>
</nav>