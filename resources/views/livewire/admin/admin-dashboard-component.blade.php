<div>    
	<main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>{{Auth::user()->name}}</span></li>
                </ul>
            </div>
        </div>

        <div class="container pb-60">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>WELCOME, {{Auth::user()->name}}</h2>
                    <p>Selamat bekerja ! Gunakan sistem ini untuk kepentingan penjualan dan pemasaran produk.</p>
                    <p>Tingakatkan Omzet dengan perbanyak posting, share medsos dan advertising</p>
                    <br />
                    <p>Tim Support</p>
                </div>
            </div>
        </div>
    </main>
</div>