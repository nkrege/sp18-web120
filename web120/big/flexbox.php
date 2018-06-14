<?php include "includes/header.php"?>

<p>The Flexbox Layout &lpar;Flexible Box&rpar; module aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic &lpar;Coyier 2018&rpar;.</p>
<p>The main idea of Flexbox is to give the containing element the ability to alter the elements within to best fill the available space. This help accommodate most devices and screen sizes &lpar;Coyier 2018&rpar;.</p>
<p>It’s best to think of flexbox in terms of two axes, the main and the cross. The main axis is defined by the flex-direction property and the cross runs perpendicular to it &lpar;Baltimora&rpar;. Everything you will do with Flexbox will refer back to these axes.</p>
<p>Flex-direction has four possible values:</p>
<img class="desktop flex" src="images/flex.PNG" alt="Flex Direction">
<img class="phone flexph" src="images/flexph.png" alt="Flex Direction">
<ul>
    <li>row</li>
    <li>row-reverse</li>
    <li>column</li>
    <li>column-reverse</li>
</ul>
<p>If you choose row or row-reverse, your main axis will act as the inline direction &lpar;left to right or horizontally&rpar;. If you choose column or column-reverse, your main axis will behave like the block direction &lpar;up and down, or vertically&rpar;.</p>
<p>Now, the cross axis in the will run perpendicular to whichever main axis you choose. So, if you choose row or row-reverse, the cross axis will run down the columns, and visa versa.</p>
<p>Another thing to consider about flexbox is that it does not make any assumptions about the writing mode of the document. In the past, CSS placed heavy emphasis on documents starting on the top left corner. Now, however, modern layouts encompass a wide range of writing modes. This means that we can now support other languages that don’t follow the standard flow of English. </p>
<p>As you can start to see, the topic of flexbox is multifaceted and there are many more moving pieces, but I think we can all agree that the adoption of flexbox, which is in its Last Call Working Draft with W3C, will greatly benefit designers.</p>

        </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
        <aside>
            <h3>Citations</h3>
            
            <p>Coyier, Chris. “A Complete Guide to Flexbox.” CSS-Tricks, 23 Apr. 2018, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">css-tricks.com/snippets/css/a-guide-to-flexbox/.</a></p>
            
            <p>Baltimora “Basic Concepts of Flexbox.” MDN Web Docs, <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.</a></p>
        </aside>
    <!-- END RIGHT COL -->
    
    <?php include "includes/footer.php"?>