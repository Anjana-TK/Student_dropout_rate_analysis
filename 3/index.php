<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s009">
      <form action="view.php" autocomplete="off" method="POST">
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
              
              <div class="icon-wrap">
                <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="advance-search">
            <span class="desc">ADVANCED FILTER SEARCH</span>
            <div class="row">
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="gender">
                    <option placeholder="" value="#">Gender</option>
                    <option>boys</option>
                    <option>girls</option>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="year">
                    <option placeholder="" value="#">year range</option>
                    <option>2014-15</option>
                    <option>2015-16</option>
                    <option>2016-17</option>
                    <option>2018-19</option>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="state">
                    <option placeholder="" value="#">State</option>
                    
                    <option value="1">Andhra Pradesh</option>
                      <option value="2">Arunachal Pradesh</option>
                      <option value="3">Assam</option>
                      <option value="4">Bihar</option>
                      <option value="5">Chhattisgarh</option>
                      <option value="6">Goa</option>
                      <option value="7">Gujarat</option>
                      <option value="8">Haryana</option>
                      <option value="9">Himachal Pradesh</option>
                      <option value="10">Jammu and Kashmir</option>
                      <option value="11">Jharkhand</option>
                      <option value="12">Karnataka</option>
                      <option value="13">Kerala</option>
                      <option value="14">Madhya Pradesh</option>
                      <option value="15">Maharashtra</option>
                      <option value="16">Manipur</option>
                      <option value="17">Meghalaya</option>
                      <option value="18">Mizoram</option>
                      <option value="19">Nagaland</option>
                      <option value="20">Odisha</option>
                      <option value="21">Punjab</option>
                      <option value="22">Rajasthan</option>
                      <option value="23">Sikkim</option>
                      <option value="24">Tamil Nadu</option>
                      <option value="25">Telangana</option>
                      <option value="26">Tripura</option>
                      <option value="27">Uttarakhand</option>
                      <option value="28">Uttar Pradesh</option>
                      <option value="29">West Bengal</option>
                   
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row second">
              
            
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="type">
                    <option placeholder="" value="#">Type</option>
                    <option value="primary">Primary</option>
        <option value="upper primary">Upper Primary</option>
        <option value="secondary">Secondary</option>
        <option value="higher secondary">Higher Secondary</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row third">
              <div class="input-field">
                <div class="result-count">
                  
                <div class="group-btn">
                  <button class="btn-delete" id="delete">RESET</button>
                  <button class="btn-search">SEARCH</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        itemSelectText: '',
        removeItemButton: true,
      });
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
  </body>
</html>
