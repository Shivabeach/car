<body>
  <header>
    <hgroup>
      <h1><?=$header;?></h1>
    </hgroup>
  </header>
<div class="container">
	  <div class="container--left">
	    <div class="card">
	      <div class="card--inside">
	        <div class="card--inside-header fs-4">list</div>
	         <?php include"equip.html";?>
	    	</div>
	 	 </div>
		</div>
	  <div class="container--main">
	    <div class="card">
	     	<div class="card--inside">
	       	<div class="card--inside-header fs-4">Usage Ratios</div>
	       	<table>
            <thead>
              <tr>
                <th class="center">Mix For</th>
                <th class="center">Used In</th>
                <th class="center">Full Ounces</th>
                <th class="center">Ratio</th>
                <th class="center">Material</th>
                <th class="center">Water</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="center">Hydro Foam Kims Car</td>
                <td class="center">Foam Cannon</td>
                <td class="center">28</td>
                <td class="center">1 : 9</td>
                <td class="center">3</td>
                <td class="center">25</td>
              </tr>
              <tr>
                <td class="center">Adams Tire Cleaner</td>
                <td class="center">Hand Foamer</td>
                <td class="center">35</td>
                <td class="center">1 : 9</td>
                <td class="center">4</td>
                <td class="center">31</td>
              </tr>
              <tr>
                <td class="center">Griots Surface Wash</td>
                <td class="center">Foam Cannon #3</td>
                <td class="center">30</td>
                <td class="center">1 : 13</td>
                <td class="center">2</td>
                <td class="center">28</td>
              </tr>
              <tr>
                <td class="center">Angelwax Fast Foam</td>
                <td class="center">Foam Cannon #3</td>
                <td class="center">30</td>
                <td class="center">1 : 9</td>
                <td class="center">3</td>
                <td class="center">27</td>
              </tr>
            </tbody>
          </table>
	    </div>

		</div>
		</div>
		<div class="container--right">
	    <div class="card">
	     	<div class="card--inside">
	       	<div class="card--inside-header fs-4">Response</div>
	       	<div class="display success"></div>
	      </div>
	    </div>
	  </div>
	</div> <!-- End of container -->