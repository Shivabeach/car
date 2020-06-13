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
	        <h2 class="card--inside-header">list</h2>
	         <?php include"equip.html";?>
	    	</div>
	 	 </div>
		</div>
	  <div class="container--main">
	    <div class="card">
	     	<div class="card--inside">
	       	<h2 class="card--inside-header">Usage Ratios</h2>
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
              <tr>
                <td class="center">Meguiars Super Degreaser</td>
                <td class="center">Spray</td>
                <td class="center">20</td>
                <td class="center">1 : 4</td>
                <td class="center">4</td>
                <td class="center">16</td>
              </tr>
              <tr>
                <td class="center">Angelwax Cleanliness</td>
                <td class="center">Foam Cannon</td>
                <td class="center">30</td>
                <td class="center">1 : 3</td>
                <td class="center">10</td>
                <td class="center">20</td>
              </tr>
            </tbody>
          </table>
	    </div>

		</div>
		</div>
		<div class="container--right">
	    <div class="card">
	     	<div class="card--inside">
	       	<h2 class="card--inside-header">Calculate</h2>
	       	<div class="display success"></div>
          <form>
            <div class="input-row">
              <label for="ounces">Number of Ounces To Fill</label>
              <input class="input-med" type="number" id="ounces" />
            </div>
            <div class="input-row">
              <label for="ratio">Ratio Required 1: ? </label>
              <input class="input-med" type="number" id="ratio">
            </div>
            <input type="submit" class="none" id="cripes" value="Submit">
            <input type="reset" class="none" value="Do Over" id="reset1">
          </form>
            <div class="input-row">
              <div id="validity"></div>
              <p class="emp">Dilutable Material <span class="bold-10 bold-blue" id="materialAmount"> </span> </p>
            </div>
            <div class="input-row">
              <p class="emp">Water <span class="bold-10 bold-blue" id="dilutionAmount"> </span> </p>
            </div>
	      </div>
	    </div>
	  </div>
	</div> <!-- End of container -->