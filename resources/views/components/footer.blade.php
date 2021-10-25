<footer>
  <div class="footer-container">
    <div>
      Uiara Franco
      &copy; Copyright 2021
    </div>

    <div>
      <div>
        Developed by<br><a href="https://github.com/igorofranco" target="_blank">Igor Franco</a>
      </div>
      <div>
        <ul>
          <li>
            <a href="https://api.whatsapp.com/send?phone=5531992550403" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/uiarafranco/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://open.spotify.com/show/53FT6BC8CbysFzjIqki6Dh" target="_blank">
              <i class="fab fa-spotify"></i>
            </a>
          </li>
          <li>
            <a href="#" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<style>
  footer{
    bottom: 0;
    background-color: #222;
    color: #eee;
    font-family: "Lato", sans-serif;
  }
  footer > div.footer-container{
    margin: 0 auto;
    padding: 0 3rem;
    max-width: 1080px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
  footer > div.footer-container > div:nth-of-type(2){
    display: flex;
    justify-content: center;
    align-items: center;
  }
  footer > div.footer-container > div:nth-of-type(2) > div:nth-of-type(1){
    font-size: .75em;
    color: #aaa;
  }
  footer > div.footer-container > div:nth-of-type(2) > div:nth-of-type(1) > a{
    text-decoration: none;
    color: inherit;
  }
  footer > div.footer-container > div:nth-of-type(2) > div:nth-of-type(1) > a:hover{
    color: goldenrod;
  }
  footer ul{
    display: flex;
  }
  footer a{
    color: #ffd8ef;
  }
  footer i{
    font-size: 2rem;
  }

  @media only screen and (max-width: 900px){
    footer{
      padding: 2rem 0 0 0;
    }
    footer > div.footer-container{
      flex-direction: column;
    }
    footer ul{
      padding: 0;
    }
  }
</style>
