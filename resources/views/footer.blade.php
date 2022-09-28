<h1>questo è il footer</h1>

<footer>
        <div class="container">
            <div class="ul-container">
                <div>
                    <ul>
                    <h3 class="list-title">DC COMICS</h3>
                    <li >
                        <a href="#"></a>
                    </li>
                </ul>

                <ul>
                    <h3 class="list-title">SHOP</h3>
                    <li v-for="(shop, index) in shops" :key="index">
                        <a href="#"></a>
                    </li>
                </ul>
                </div>
                

                <ul>
                    <h3 class="list-title">DC</h3>
                    <li v-for="(dc, index) in dcs" :key="index">
                        <a href="#"></a>
                    </li>
                </ul>

                <ul>
                    <h3 class="list-title">SITES</h3>
                    <li v-for="(site, index) in sites" :key="index">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>

            <img src="../assets/img/dc-logo-bg.png" alt="logo">
        </div>

        

        <div class="footer-bottom">
            <div class="bottom-container">
                <button>SIGN-UP NOW!</button>
                <div class="socials">
                    
                    <h3>FOLLOW US</h3>
                    
                    <ul>
                        <li >
                            <img  src="" alt="social">
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </footer>