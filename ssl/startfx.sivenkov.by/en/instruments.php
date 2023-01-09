<?php include_once 'header.php'; ?>
<link rel="stylesheet" href="../common/css/instruments.css">
<section class="section section-instruments js-scroll-block">
   <div class="container">
      <div class="instruments_header instruments_title section-title title ">Tradings Instruments</div>
      <nav class="tabs">
         <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link text-center active" id="nav-home-tab" data-toggle="tab" data-param="Forex" href="#nav1"
               role="tab" aria-controls="nav-home" aria-selected="true">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/forex_icon.png" class="green_icon">
                  <img src="../common/images/icons/forex_white_icon.png" class="white_icon">
                  <span class="instrument-name">Currencies</span>
               </div>
            </a>
            <a class="nav-item nav-link text-center" id="nav-profile-tab" data-toggle="tab" data-param="Metals_Energy" href="#nav2" role="tab"
               aria-controls="nav-profile" aria-selected="false">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/metals_icon.png" class="green_icon">
                  <img src="../common/images/icons/metals_white_icon.png" class="white_icon">
                  <span class="instrument-name">Metals and Energies</span>
               </div>
            </a>
            <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" data-param="Indices" href="#nav3" role="tab"
               aria-controls="nav-contact" aria-selected="false">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/indicies_icon.png" class="green_icon">
                  <img src="../common/images/icons/indicies_white_icon.png" class="white_icon">
                  <span class="instrument-name">Indicies</span>
               </div>
            </a>
            <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" data-param="Shares" href="#nav4" role="tab"
               aria-controls="nav-contact" aria-selected="false">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/shares_icon.png" class="green_icon">
                  <img src="../common/images/icons/shares_white_icon.png" class="white_icon">
                  <span class="instrument-name">Shares</span>
               </div>
            </a>
            <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" data-param="Commodities" href="#nav5" role="tab"
               aria-controls="nav-contact" aria-selected="false">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/commonditions_icon.png" class="green_icon">
                  <img src="../common/images/icons/commonditions_white_icon.png" class="white_icon">
                  <span class="instrument-name">Commodities</span>
               </div>
            </a>
            <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" data-param="Cryptocurrencies" href="#nav6" role="tab"
               aria-controls="nav-contact" aria-selected="false">
               <div class="instruments-icon-wrap">
                  <img src="../common/images/icons/cryptocurrency_icon.png" class="green_icon">
                  <img src="../common/images/icons/cryptocurrency_white_icon.png" class="white_icon">
                  <span class="instrument-name text-desktop">Cryptocurrencies</span>
                  <span class="instrument-name text-mobile">Crypto</span>
               </div>
            </a>
         </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
         <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="pageName">Currencies</div>
            <table id="nav1Table" class="table-instruments dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <td class="thead-title">Symbol</td>
                     <td class="thead-title">Description</td>
                     <td class="thead-title">Currency</td>
                     <td class="thead-title">Leverage</td>
                     <td class="thead-title">Contract size</td>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>EURUSD</td>
                     <td>Euro vs US Dollar</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPUSD</td>
                     <td>Great Britain Pound vs US Dollar</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDJPY</td>
                     <td>US Dollar vs Japanese Yen</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AUDUSD</td>
                     <td>Australian Dollar vs US Dollar</td>
                     <td>AUD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURCHF</td>
                     <td>Euro vs Swiss Franc</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURGBP</td>
                     <td>Euro vs Great Britain Pound</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NZDUSD</td>
                     <td>New Zealand Dollar vs US Dollar</td>
                     <td>NZD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURJPY</td>
                     <td>Euro vs Japanese Yen</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDCAD</td>
                     <td>US Dollar vs Canadian Dollar</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDCHF</td>
                     <td>US Dollar vs Swiss Franc</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AUDCAD</td>
                     <td>Australian Dollar vs Canadian Dollar</td>
                     <td>AUD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AUDCHF</td>
                     <td> Australian Dollar vs Swiss Franc</td>
                     <td>AUD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AUDJPY</td>
                     <td> Australian Dollar vs Japanese Yen</td>
                     <td>AUD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AUDNZD</td>
                     <td> Australian Dollar vs New Zealand Dollar</td>
                     <td>AUD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CADCHF</td>
                     <td> Canadian Dollar vs Swiss Franc</td>
                     <td>CAD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CADJPY</td>
                     <td> Canadian Dollar vs Japanese Yen</td>
                     <td>CAD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CHFJPY</td>
                     <td> Swiss Franc vs Japanese Yen</td>
                     <td>CHF</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURAUD</td>
                     <td> Euro vs Australian Dollar</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURCAD</td>
                     <td> Euro vs Canadian Dollar</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURNZD</td>
                     <td> Euro vs New Zealand Dollar</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPAUD</td>
                     <td> Great Britain Pound vs Australian Dollar</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPCAD</td>
                     <td> Great Britain Pound vs Canadian Dollar</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPCHF</td>
                     <td> Great Britain Pound vs Swiss Franc</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPJPY</td>
                     <td> Great Britain Pound vs Japanese Yen</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPNZD</td>
                     <td> Great Britain Pound vs New Zealand Dollar</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NZDCAD</td>
                     <td> New Zealand Dollar vs Canadian Dollar</td>
                     <td>NZD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NZDCHF</td>
                     <td> New Zealand Dollar vs Swiss Franc</td>
                     <td>NZD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NZDJPY</td>
                     <td> New Zealand Dollar vs Japanese Yen</td>
                     <td>NZD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDHKD</td>
                     <td> US Dollar vs Hong Kong Dollar</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDSGD</td>
                     <td> US Dollar vs Singapore Dollar</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURDKK</td>
                     <td> Euro vs Danish Krone</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURHUF</td>
                     <td> Euro vs Hungarian Forint</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURNOK</td>
                     <td> Euro vs Norweigen Krone</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURPLN</td>
                     <td> Euro vs Polish Zloty</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURSEK</td>
                     <td> Euro vs Swedish Krone</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURTRY</td>
                     <td> Euro vs Turkish Lira</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDDKK</td>
                     <td> US Dollar vs Danish Krone</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDHUF</td>
                     <td> US Dollar vs Hungarian Forint</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDMXN</td>
                     <td> US Dollar vs Mexican Peso</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDNOK</td>
                     <td> US Dollar vs Norwegian Krone</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDPLN</td>
                     <td> US Dollar vs Polish Zloty</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDRUB</td>
                     <td> US Dollar vs Russian Ruble</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDSEK</td>
                     <td> US Dollar vs Swedish Krona</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDTRY</td>
                     <td> US Dollar vs Turkish Lira</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDZAR</td>
                     <td> US Dollar vs South African Rand</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EURILS</td>
                     <td>Euro vs Israeli Shekel</td>
                     <td>EUR</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GBPILS</td>
                     <td> Great Britian Pound vs Israeli Shekel</td>
                     <td>GBP</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>USDILS</td>
                     <td>US Dollar vs Israeli Shekel</td>
                     <td>USD</td>
                     <td>100%</td>
                     <td>100000</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="pageName">Metals and Energies</div>
            <table id="nav2Table" class="dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <td>Symbol</td>
                     <td>Description</td>
                     <td>Currency</td>
                     <td>Leverage</td>
                     <td>Contract size</td>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>XAGUSD</td>
                     <td>Silver vs. US Dollar</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>5000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>XAUUSD</td>
                     <td>Gold vs. US Dollar</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BRNT - Date</td>
                     <td> Brent Crude Oil (ICE-EUR)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CL - Date</td>
                     <td> Light Sweet Crude Oil (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NGAS - Date</td>
                     <td> Natural Gas (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>RBOB - Date</td>
                     <td> R.B.O.B Gasoline (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="pageName">Indicies</div>
            <table id="nav3Table" class="dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <td>Symbol</td>
                     <td>Description</td>
                     <td>Currency</td>
                     <td>Leverage</td>
                     <td>Contract size</td>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>CAC - Date</td>
                     <td> CAC 40 Index Future (Euronext)</td>
                     <td>EUR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DAX - Date</td>
                     <td> DAX 30 Index Future (Eurex)</td>
                     <td>EUR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DOW - Date</td>
                     <td> MINI-SIZE DOW Index Future (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FTSE - Date</td>
                     <td> FTSE 100 Index Future (ICE-EU)</td>
                     <td>GBP</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NK - Date</td>
                     <td> Nikkei 225 Index Future (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NSDQ - Date</td>
                     <td> Nasdaq100 Index Future (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SP - Date</td>
                     <td> E-MINI S&P500 Index Future (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ASX - Date</td>
                     <td> ASX SPI 200 Index Future (ASX)</td>
                     <td>AUD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DJEXX - Date</td>
                     <td> DJ Euro Stoxx Index Future (Eurex)</td>
                     <td>EUR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HHI - Date</td>
                     <td> China H-Shares Index Futures (HKE)</td>
                     <td>HKD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HSI - Date</td>
                     <td> Hang Seng Index Future (HKE)</td>
                     <td>HKD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>IBEX - Date</td>
                     <td> IBEX Index 35 (BME)</td>
                     <td>EUR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>JSE - Date</td>
                     <td> FTSE/JSE Top 40 Index Future (Safex)</td>
                     <td>ZAR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MIB - Date</td>
                     <td> FTSE / MIB Index Future</td>
                     <td>EUR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NIFTY - Date</td>
                     <td> CNX NIFTY Index Future (NSE)</td>
                     <td>INR</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VIX - Date</td>
                     <td> Volatility SP500 Index Future (CBOE)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>$IND - Date</td>
                     <td> US$ Future Index (ICE - US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TA35</td>
                     <td>Tel Aviv 35 Index</td>
                     <td>ILS</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="pageName">Shares</div>
            <table id="nav4Table" class="dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <th>Symbol</th>
                     <th>Description</th>
                     <th>Currency</th>
                     <th>Leverage</th>
                     <th> Contract size</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>ALTABA</td>
                     <td>Altaba Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ARCELOR</td>
                     <td> ArcelorMittal steel (NYSE)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 33</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HARLEY</td>
                     <td>Harley-Davidson Inc, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HERSHEY</td>
                     <td>Hershey Company, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>KORS</td>
                     <td>Michael Kors Holdings Limited, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LOCKHEED</td>
                     <td>Lockheed Martin Corporation, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MACYS</td>
                     <td>Macy's Inc, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NTDOY</td>
                     <td> Nintendo LTD. OTC (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NVIDIA</td>
                     <td>NVIDIA Corporation, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>QUALCOMM</td>
                     <td>Qualcomm Incorporated, NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>RAYTHEON</td>
                     <td>Raytheon Company, NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Yandex</td>
                     <td>Yandex N.V. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Lufthansa</td>
                     <td>Deutch Lufthansa (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BAS</td>
                     <td>Basf SE (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MUV</td>
                     <td>Munich Re(XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SAP</td>
                     <td>SAP SE (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ADS</td>
                     <td>Adidas AG (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Tkag</td>
                     <td>ThyssenKrupp AG (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DPW</td>
                     <td>Deutsche Post AG (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>IFX</td>
                     <td>Infineon Technologies AG (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HEN</td>
                     <td>Henkel AG & Co (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LIN</td>
                     <td>Linde AG (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MRK</td>
                     <td>Merck KGaA (XETRA Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TESCO</td>
                     <td>Tesco (London Stock Exchange)</td>
                     <td>GBP</td>
                     <td>1:10</td>
                     <td> 1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>UCG</td>
                     <td>Unicredit (MIL)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SAFRAN</td>
                     <td> Safran aerospace and defence (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TECHNIP</td>
                     <td>Technip oil equipment and services (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>UNIBAIL</td>
                     <td>Unibail-Rodamco (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VALLOUREC</td>
                     <td>Vallourec industrial machinery (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VEOLIA</td>
                     <td>Veolia Environnement water (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VINCI</td>
                     <td>Vinci heavy construction (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>INGA</td>
                     <td>ING Greop NV (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Heineken</td>
                     <td>Heineken (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>UnileverNL</td>
                     <td>Uniliever NV (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GAZPROM</td>
                     <td>GAZPROM ( Moscow Stock Exchange )</td>
                     <td>RUB</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NDA</td>
                     <td>Nordea Bank (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SWED</td>
                     <td>Swed Bank (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SEB</td>
                     <td>SEB (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SHB</td>
                     <td>Handelsbanken (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SSAB</td>
                     <td>SSAB (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BOL</td>
                     <td>Boliden (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FING</td>
                     <td>Fingerprints Card (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TELIA</td>
                     <td>Telia (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ERIC</td>
                     <td>Ericsson (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VOLV</td>
                     <td>Volvo (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FABG</td>
                     <td>Fabege (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SAND</td>
                     <td>Sandvik (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HM</td>
                     <td>H&M (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ABB</td>
                     <td>ABB LTD. (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ATCO</td>
                     <td>Atlas Copco (OMX)</td>
                     <td>SEK</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>3M</td>
                     <td>3M Company. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AIG</td>
                     <td>American International Group Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Alibaba</td>
                     <td> Alibaba Group Holding LTD. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ALCOA</td>
                     <td> Alcoa Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AMAZON</td>
                     <td> Amazon Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AMEX</td>
                     <td> American Express Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ATT</td>
                     <td> AT&T Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BERKSHIRE</td>
                     <td> Berkshire Hathaway (B) Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BOA</td>
                     <td> Bank of America Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BOEING</td>
                     <td> The Boeing Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CAT</td>
                     <td> Caterpillar Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CHEVRON</td>
                     <td> Chevron Corporation. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CHMO</td>
                     <td> China Mobile Ltd. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>COKE</td>
                     <td> The Coca-Cola Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CITI</td>
                     <td> Citigroup Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DISNEY</td>
                     <td> The Walt Disney Company. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EXXM</td>
                     <td> Exxon Mobil Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FERRARI</td>
                     <td>Ferrari N V. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GE</td>
                     <td> General Electric Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GM</td>
                     <td> General Motors Company. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HPACK</td>
                     <td> Hewlett - Packard Company. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>IBM</td>
                     <td> International Business Machines Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>JNJ</td>
                     <td> Johnson & Johnson. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>JPM</td>
                     <td> JP Morgan Chase & Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>KING</td>
                     <td> King Digital Entertainment plc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MCDON</td>
                     <td> McDonald's Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MORGAN_STA</td>
                     <td> Morgan Stanley. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NOKIA</td>
                     <td> Nokia Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PFIZER</td>
                     <td> Pfizer Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PG</td>
                     <td> Procter & Gamble Co. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>POTASH</td>
                     <td> Potash Corporation of Saskatchewan Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SONY</td>
                     <td> Sony Corporation. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TOYOTA</td>
                     <td> Toyota Motor Corp. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>UBS</td>
                     <td> UBS AG. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>WMART</td>
                     <td> Wal-Mart Stores Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VERIZON</td>
                     <td> Verizon Communications Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BAIDU</td>
                     <td> Baidu Inc. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CISCO</td>
                     <td> Cisco Systems Inc. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EBAY</td>
                     <td> eBay Inc. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FACEBOOK</td>
                     <td> Facebook Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>GOLDSACHS</td>
                     <td> The Goldman Sachs Group Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>GOPRO</td>
                     <td>GoPro Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>GOOGLE</td>
                     <td> Google Inc. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>INTEL</td>
                     <td> Intel Corp. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>MSFT</td>
                     <td> Microsoft Corp. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>TESLA</td>
                     <td> Tesla Motors Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>TEVA</td>
                     <td> Teva Pharmaceutical Industries Ltd. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>TWITTER</td>
                     <td> Twitter Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>YAHOO</td>
                     <td> Yahoo! Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>ALLI</td>
                     <td> Allianz (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BAYER</td>
                     <td> Bayer AG (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BMW</td>
                     <td> BMW (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>COMMBK</td>
                     <td> Commerzbank (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>DAIM</td>
                     <td> Daimler (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>DBFRA</td>
                     <td> Deutsche Bank AG (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>DTELE</td>
                     <td> Deutsche Telekom AG (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>EOAN</td>
                     <td> E.ON SE (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>METRO</td>
                     <td> Metro AG (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>SIE</td>
                     <td> Siemens Aktiengesellschaft (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>VOWGEN</td>
                     <td> Volkswagen AG (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>FRTELE</td>
                     <td> Orange / France Telecom (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>VIVF</td>
                     <td> Vivendi France (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BBVA</td>
                     <td> Banco Bilbao Vizcaya Argentaria (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BSANMD</td>
                     <td> Banco Santander (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>IBER</td>
                     <td> Acciones Iberdrola (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>INTEX</td>
                     <td> Industria De Diseno Textil (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>REPSOL</td>
                     <td> Repsol (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>TELFON</td>
                     <td> Telefonica (Bolsa de Madrid)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BPOMIL</td>
                     <td> Banco Popolare (Borsa Italiana)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>ENI</td>
                     <td> Eni SpA (Borsa Italiana)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>FIAT</td>
                     <td> Fiat Chrysler Automobiles (Borsa Italiana)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>TELITA</td>
                     <td> Telecom Italia S.p.A (Borsa Italiana)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>BARCLAYS</td>
                     <td> Barclays Plc (London Stock Exchange)</td>
                     <td>GBP</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr>
                     <td>B.PETROL</td>
                     <td> British Petroleum (London Stock Exchange)</td>
                     <td>GBP</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>HSBC</td>
                     <td> HSBC Holdings (London Stock Exchange)</td>
                     <td>GBP</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MARKS</td>
                     <td>Marks & Spencer Group Plc (London Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VODAFONE</td>
                     <td> Vodafone Group (London Stock Exchange)</td>
                     <td>GBP</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LVMH</td>
                     <td> LVMH SA (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>TOTAL</td>
                     <td> Total (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LINE</td>
                     <td> LINE Corporation. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MA</td>
                     <td>MasterCard Incorporated NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MANU</td>
                     <td> Manchester United PLC. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>VISA</td>
                     <td>Visa Inc. NYSE (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ADOBE</td>
                     <td>Adobe Systems Incorporated, NYSE(USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>NIKE</td>
                     <td>Nike, NYSE(USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SNAP</td>
                     <td>Snapchat, NYSE(USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Netflix</td>
                     <td>Netflix Inc. Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SolarCity</td>
                     <td>SolarCity Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FIREEYE</td>
                     <td>FireEye Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MOBILEYE</td>
                     <td>Mobileye Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LibertyGlob</td>
                     <td>LibertyGlobal Nasdaq (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>INTEL</td>
                     <td> Intel Corp. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Apple</td>
                     <td> Apple Inc. NASDAQ (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>Ahold</td>
                     <td>Koninklijke Ahold Delhaize (Frankfurt Stock Exchange)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>FRTELE</td>
                     <td> Orange / France Telecom (EURONEXT Paris)</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AXA</td>
                     <td> AXA full line insurance (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ALSTOM</td>
                     <td> Alstom industrial machinery (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AIRLIQUID</td>
                     <td> Air Liquide commodity chemicals (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>AIRBUS</td>
                     <td> Airbus Group aerospace (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BNP</td>
                     <td> BNP Paribas banks (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BOUYGUES</td>
                     <td> Bouygues heavy construction (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CAPGEMINI</td>
                     <td> Capgemini computer services (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CARREFOUR</td>
                     <td> Carrefour food retailers&wholesalers(EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>EDFELECT</td>
                     <td> EDF electricity (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CREDIT</td>
                     <td> Credit Agricole banks (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ACCORHOTELS</td>
                     <td> Accor hotels (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ESSILOR</td>
                     <td> Essilor medical supplies (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GEMALTO</td>
                     <td> Gemalto cyber security (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GDFGAS</td>
                     <td> GDF Suez gas distribution (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>GROUPEDAN</td>
                     <td> Groupe Danone food products (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LEGRAND</td>
                     <td> Legrand electrical components&equipm(EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LOREAL</td>
                     <td> L'Or?al personal products (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>MICHELIN</td>
                     <td> Michelin tires (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PERNOD</td>
                     <td> Pernod Ricard distillers and vintner(EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PUBLICIS</td>
                     <td> Publicis media agencies (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>RENAULT</td>
                     <td> Renault automobiles (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SAINTGOBAIN</td>
                     <td> Saint-Gobain building materials&fixtur(EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SANOFI</td>
                     <td> Sanofi pharmaceuticals (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SCHNEIDER</td>
                     <td> Schneider Electric (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SOCIETE</td>
                     <td> Societe Genrale banks (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SOLVAY</td>
                     <td> Solvay chemicals (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>STMICROELEC</td>
                     <td> STMicroelectronics semiconductors (EURONEXT Paris</td>
                     <td>EUR</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>c</td>
                     <td> Nintendo LTD. OTC (USA)</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td> 100</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="nav5" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="pageName">Commodities</div>
            <table id="nav5Table" class="dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <td>Symbol</td>
                     <td>Description</td>
                     <td>Currency</td>
                     <td>Leverage</td>
                     <td>Contract size</td>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>COCOA - Date</td>
                     <td> Cocoa (ICE-US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>COFFE - Date</td>
                     <td> Coffee (ICE-US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>COPP - Date</td>
                     <td> Copper (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>10000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>CORN - Date</td>
                     <td> Corn (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>COTT2 - Date</td>
                     <td> Cotton #2 (ICE-US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ORANG - Date</td>
                     <td> Orange Juice (ICE-US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PALLAD - Date</td>
                     <td> Palladium (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>PLAT - Date</td>
                     <td> Platinum (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SBEAN - Date</td>
                     <td> Soybeans (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>SUG11 - Date</td>
                     <td> Sugar #11 (ICE-US)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>1000</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>WHEAT - Date</td>
                     <td> Wheat (CME)</td>
                     <td>USD</td>
                     <td>25.00%</td>
                     <td>100</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="nav6" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="pageName">Cryptocurrencies</div>
            <table id="nav6Table" class="dataTable-instruments display" style="width:100%">
               <thead>
                  <tr>
                     <td>Symbol</td>
                     <td>Description</td>
                     <td>Currency</td>
                     <td>Leverage</td>
                     <td>Contract size</td>
                  </tr>
               </thead>
               <tbody>
                  <tr class="dataTable-row">
                     <td>BTCUSD</td>
                     <td>Bitcoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ETHUSD</td>
                     <td>Etherium vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LTCUSD</td>
                     <td>Litecoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DSHUSD</td>
                     <td>Dashcoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>XRPUSD</td>
                     <td>Ripple vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ETCUSD</td>
                     <td>Etherium Classic vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BCHUSD</td>
                     <td>Bitcoin Cash vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:10</td>
                     <td>100</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BTCUSD.m</td>
                     <td>Bitcoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ETHUSD.m</td>
                     <td>Etherium vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>LTCUSD.m</td>
                     <td>Litecoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>DSHUSD.m</td>
                     <td>Dashcoin vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>XRPUSD.m</td>
                     <td>Ripple vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>ETCUSD.m</td>
                     <td>Etherium Classic vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
                  <tr class="dataTable-row">
                     <td>BCHUSD.m</td>
                     <td>Bitcoin Cash vs. US Dollar ( Bitfinex )</td>
                     <td>USD</td>
                     <td>1:1</td>
                     <td>1</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="back_to_top">Back To Top</div>
   </div>
</section>
<?php include_once 'btn-call.php'; ?>
<?php include_once 'footer.php'; ?>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="../common/js/instruments.js"></script>
<script>
  $(function(){
    $(".dataTable-instruments").dataTable({
      pageLength: 20,
      ordering: !1,
      language: {
        search: ""
      }
    });
    $('.dataTables_filter input[type="search"]').attr("placeholder", "Search"), $(".back_to_top").click(function() {
      $("html, body").animate({
        scrollTop: $(".instruments_header").offset().top
      }, 1e3);
    });
  });
</script>
