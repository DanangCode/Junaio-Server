<?php

/**
 * @copyright  Copyright 2009 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Bernhard Heindl
 **/

/**
 * When the channel is being viewed, a poi request will be sent
 * $_GET['l']...(optinal) Position of the user when interacting with the POI
 * $_GET['p']...(optinal) perimeter of the data requested in meters.
 * $_GET['uid']... Unique user identifier
 * $_GET['m']... (optional) limit of to be returned values
 * $_GET['page']...page number of result. e.g. m = 10: page 1: 1-10; page 2: 11-20, e.g.
 **/
 
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<results>

  <poi id=\"2\" interactionfeedback=\"none\">
     <name><![CDATA[jasper]]></name>

     <description><![CDATA[731 Henry]]></description>


     <l>37.806173,-122.296007,0</l>
     <o>0,0,0</o>

     <minaccuracy/>
             <maxdistance/>
             <mime-type>model/md2</mime-type>
             <mainresource>http://www.junaio.com/publisherDownload/tutorial/metaioman.md2_enc</mainresource>
             <!-- force3d determines whether the 3D model will be rendered right away, or a default poi with a \"load 3D Model\" in the description shall be shown -->
             <force3d>true</force3d>
             <s>1</s>
             <behaviours>
                <behaviour type=\"idle\">
                   <!-- LENGTH: 0 for looping, amount of frames otherwise -->
                   <length>0</length>
                   <!-- NODE_ID: name of the animation in the 3D model -->
                   <node_id>frame</node_id>
                </behaviour>
             </behaviours>
             <resources>
                <resource>http://www.junaio.com/publisherDownload/tutorial/metaioman.png</resource>
             </resources>
             <thumbnail>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</thumbnail>
             <icon>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</icon>
             <homepage>http://www.metaio.com/</homepage>         
    </poi>
            
            
            
<poi id=\"1\" interactionfeedback=\"none\">
    <name><![CDATA[The Erotics Of Everyday Life]]></name>
    
    <description><![CDATA[Mama Buzz]]></description>  


    <l>37.805715,-122.297595,0</l>
    <o>0,0,0</o>
    
  <minaccuracy/>
         <maxdistance/>
         <mime-type>image/png</mime-type>
         <mainresource>http://hyperlocative.appspot.com/static/jasper_200.png</mainresource>
         
    <thumbnail>http://hyperlocative.appspot.com/static/jasper_100.png</thumbnail>
    <icon>http://hyperlocative.appspot.com/static/jasper_100.png</icon> 
</poi>

 <poi id=\"3\" interactionfeedback=\"none\">
    <name><![CDATA[jasper 2]]></name>

    <description><![CDATA[Weed Shop]]></description>


    <l>37.840259,-122.249508,0</l>
    <o>0,0,0</o>
  <minaccuracy/>
         <maxdistance/>
         <mime-type>model/md2</mime-type>
         <mainresource>http://www.junaio.com/publisherDownload/tutorial/metaioman.md2_enc</mainresource>
         <!-- force3d determines whether the 3D model will be rendered right away, or a default poi with a \"load 3D Model\" in the description shall be shown -->
         <force3d>true</force3d>
         <s>1</s>
         <behaviours>
            <behaviour type=\"idle\">
               <!-- LENGTH: 0 for looping, amount of frames otherwise -->
               <length>0</length>
               <!-- NODE_ID: name of the animation in the 3D model -->
               <node_id>frame</node_id>
            </behaviour>
         </behaviours>
         <resources>
            <resource>http://www.junaio.com/publisherDownload/tutorial/metaioman.png</resource>
         </resources>
         <thumbnail>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</thumbnail>
         <icon>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</icon>
         <homepage>http://www.metaio.com/</homepage>         
        </poi>
</results>";
?>
