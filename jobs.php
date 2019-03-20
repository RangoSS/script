

    <?php
     include "hedss.php";
    ?>
  <!-- Coded with love by Mutiullah Samim-->
  <body>
    <div class="myTable" style="padding-top: 10%;padding-bottom: 5%;">

<div class="searchMe" style="margin-left: 40%;">
   <h2>seach job either by category or region</h2>
<p>Type something in the input field to search the table for first names, last names or emails:</p>  
<input id="search_input" type="text" placeholder="Search..">
<br><br>
</div>
<table>
  <thead style="background-color: black;">
    <tr>
      <th>job type</th>
      <th>category</th>
      <th>Area</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
      <td>Business Analyst</td>
      <td>computer Science</td>
      <td>jonhanessburg</td>
    </tr>
    <tr>
      <td>Junior Programmer</td>
      <td>Computer Science</td>
      <td>Santon</td>
    </tr>
    <tr>
      <td>senior </td>
      <td>ratan</td>
      <td>vyas</td>
    </tr>
    <tr>
      <td>Tom</td>
      <td>kim</td>
      <td>zone</td>
    </tr>
    <tr>
      <td>Rohan</td>
      <td>Prithvi</td>
      <td>koli</td>
    </tr>
    <tr>
      <td>Vikram</td>
      <td>Girish</td>
      <td>vyas</td>
    </tr>
  </tbody>
</table>
  
<p>Note that we start the search in tbody, to prevent filtering the table headers.</p>


</div>
  </body>

  <?php

   include "foot.php";
  ?>
</html>
