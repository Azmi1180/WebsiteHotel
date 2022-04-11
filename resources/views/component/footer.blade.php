<style>

    *{
        /* border: 1px solid black; */
    }

    .bold-footer-title{
        font-weight:700;
        margin-bottom: 4vh;
    }

    .footer-flex-row {
        display: flex;
        flex-direction: row;
    }

    .footer-flex-column {
        display: flex;
        flex-direction: column;

    }

    .footer {
        display: flex;
        flex-direction: column;
        /* justify-content: flex-end; */
        /* position: relative; */
        width: 100%;
        height: 300px;
        background-color: #009B97;
        color: white;
    }

    .footer-content-wrapper{
        display: flex;
        flex-direction: row;
        width: 100%;
        margin: 2rem;
    }

    .footer-about-wrapper {
        display: flex;
        flex-direction: column;
    }

    .footer-location {
        display: flex;
        flex-direction: row;
    }

    .footer-location img {
        width: 120px;
    }

    .footer-location-desc {
        width: 100%;
        margin-left: 15px;
        font-size: 16px;
        font-weight: 500;
    }

    .footer-contact-us {
        margin-top: 5vh;
    }

    .footer-hyperlink-sect {
        margin-left: 5rem;
        justify-content: space-between;
        width: 40%;
        padding-right: 20rem;
    }


</style>

<div class="footer">
    <div class="footer-content-wrapper">
        <div class="footer-about-wrapper">
            <div class="footer-location">
                <img src="{{ asset('img/1O1DagoLogo.png') }}" alt="" class="footer-logo">
                <div class="footer-location-desc footer-flex-column">
                    <span class="bold-footer-title">THE 101 HOTEL BANDUNG</span>
                    <span>Jalan Ir. H. Juanda No.3 Bandung Wetan</span>
                    <span>40142</span>
                    <span>Bandung - Indonesia</span>
                </div>
            </div>
            <div class="footer-contact-us footer-flex-column">
                <span class="bold-footer-title">Hubungi Kami</span>
                <span>Nomor Telp : +62 22 426 0966 </span>
                <span>Email : reservation.dago@the1o1hotels.com</span>
            </div>
        </div>
        <div class="footer-hyperlink-sect footer-flex-row">
            <div class="footer-hyperlink-wrapper ">
                Fasilitas
            </div>
            <div class="footer-hyperlink-wrapper">
                baat
            </div>
            <div class="footer-hyperlink-wrapper">
                bit
            </div>
        </div>
    </div>
    <div class="footer-social-wrapper">
        <div class="footer-social-header">

        </div>
        <div class="footer-social-icon">

        </div>
    </div>
</div>
