<!-- This heading applies the 'h2' class, which might be used for styling purposes like defining specific font sizes, colors, or other visual properties for 'h2' elements with this class. -->
<h2 class="h2">Blog</h2>

<!-- This 'div' element contains a row of columns. The 'row' class is likely part of a CSS framework like Bootstrap, used for layout. -->
<div class="row">
    <!-- Each 'div' with the class 'col-sm-4' represents a column in a grid layout. The 'col-sm-4' class comes from the Bootstrap grid system, specifying that each column should take up 4 out of 12 available columns on small-sized screens and above. -->
    <!-- Additionally, the 'text-center' class is applied to center-align the content within each column. -->
    <div class="col-sm-4 text-center">
        <!-- This 'img' element is made responsive with the 'img-fluid' class, ensuring it scales appropriately with different screen sizes. -->
        <img src="./images/blog-1-720x480.jpg" class="img-fluid" alt="" />
        <!-- The 'h2' element has the class 'm-n' applied to it. This class might be used for margin styling purposes. -->
        <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
        <!-- This 'p' element contains information about the author and the date. -->
        <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
    </div>

    <!-- Repeat similar structure for other columns -->

    <!-- Second column -->
    <div class="col-sm-4 text-center">
        <img src="./images/blog-2-720x480.jpg" class="img-fluid" alt="" />
        <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
        <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
    </div>

    <!-- Third column -->
    <div class="col-sm-4 text-center">
        <img src="./images/blog-3-720x480.jpg" class="img-fluid" alt="" />
        <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
        <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
    </div>
</div>

<!-- This paragraph provides a link to read more. -->
<p class="text-center"><a href="blog.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
