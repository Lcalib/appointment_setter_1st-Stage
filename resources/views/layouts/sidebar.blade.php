<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Dash Board</h3>
        <strong>iA</strong>
    </div>

    <ul class="list-unstyled components" id="sidemenubar">
        <li class="active">
            <a href="/home">
                <i class="fas fa-home"></i>
                Home
            </a>
        </li>
        <li>
            <a href="/client">
                <i class="fas fa-briefcase"></i>
                Client
            </a>
        </li>
        <li>
            <a href="/bill" >
                <i class="fa fa-dollar-sign"></i>
                Bill
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-image"></i>
                User Profile
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-question"></i>
                FAQ
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-paper-plane"></i>
                Contact
            </a>
        </li>
    </ul>
</nav>


<script>
    var a = document.querySelectorAll("#sidemenubar a");
    for (var i = 0, length = a.length; i < length; i++) {
        a[i].onclick = function() {
        var b = document.querySelector("#sidemenubar li.active");
        if (b) b.classList.remove("active");
        this.parentNode.classList.add('active');
        };
    }
             
</script>
