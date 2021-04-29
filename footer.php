<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
            </div> <!-- .container -->
        </section>
        <footer class="footer text-center py-2 theme-bg-dark">	   
           <p class="copyright"><a href="#">My Theme</a></p>
           <?php dynamic_sidebar( 'footer-1' ); ?>
       </footer>
    </div><!-- .main-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
