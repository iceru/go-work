<nav class="header">
    <div class="container">
        <div class="leftSide">
            <button type="button" class="hamburger">
                <img src="{{ asset('images/menu.png') }}" alt="">
            </button>
            <a href="#" class="logo">
                <img src="{{ asset('images/GoWork.png') }}" alt="">
            </a>
        </div>
        <div class="rightSide">
            <ul>
                <li>
                    <a href="#">
                        MENU ONE
                    </a>
                </li>
                <li>
                    <a href="#">
                        MENU TWO
                    </a>
                </li>
                <li>
                    <a href="#">
                        MENU THREE
                    </a>
                </li>
            </ul>
            <button type="button" class="btn light-black">
                Direct Action
            </button>
        </div>
    </div>
    <div class="mobile">
        <ul>
            <li>
                <a href="#">
                    MENU ONE
                </a>
            </li>
            <li>
                <a href="#">
                    MENU TWO
                </a>
            </li>
            <li>
                <a href="#">
                    MENU THREE
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('.hamburger').click(function(e) {
            $('.mobile').toggleClass('active');
        });
    });
</script>
