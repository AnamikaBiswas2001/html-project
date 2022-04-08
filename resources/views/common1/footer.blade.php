<!------------footer-------->
<Section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Commodi iusto quasi totam maiores! In
        natus amet
        a recusandae vel ipsum magni, optio, laboriosam velit neque voluptas eligendi voluptates unde
        quam?</p>
    <div class="icons">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
    </div>
    <p>Made With <i class="fa fa-heart-o" aria-hidden="true"></i> by MIH Team</p>
</Section>
<!---Java Script-->
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
    const options = {
        bottom: '64px', // default: '32px'
        right: 'unset', // default: '32px'
        left: '32px', // default: 'unset'
        time: '0.5s', // default: '0.3s'
        mixColor: '#fff', // default: '#fff'
        backgroundColor: '#fff',  // default: '#fff'
        buttonColorDark: '#100f2c',  // default: '#100f2c'
        buttonColorLight: '#fff', // default: '#fff'
        saveInCookies: false, // default: true,
        label: '🌓', // default: ''
        autoMatchOsTheme: true // default: true
    }

    const darkmode = new Darkmode(options);
    darkmode.showWidget();
</script>
<script>
    var navLinks = document.getElementById("navLinks");

    function showmenu() {
        navLinks.style.right = "0";
    }
    function hidemenu() {
        navLinks.style.right = "-200px";
    }
</script>

</body>


</html>
