
        <div class="sidebar" data-color="red">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="{{ url('/dashboard') }}" class="simple-text">
                    rojekt | treble
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/recharges') }}">
                            <i class="material-icons">people</i>
                            <p> Recharges </p>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/calendar') }}">
                            <i class="material-icons">calendar_today</i>
                            <p> Calendar </p>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/reports') }}">
                            <i class="material-icons text-gray">assignment</i>
                            <p> Reports </p>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/users') }}">
                            <i class="material-icons text-gray">people</i>
                            <p> Users </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>