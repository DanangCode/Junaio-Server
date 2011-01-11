<?php

/**
 * @copyright  Copyright 2009 metaio GmbH. All rights reserved.
 * @link       http://www.metaio.com
 * @author     Bernhard Heindl
 **/

/**
 * Here, events from pois, being send with pois/event will be processed.
 * The following variables are available:
 * 
 * $_POST['id']...ID of the poi be interacted with
 * $_POST['type']...Type of interaction with the POI (click/text)
 * $_POST['l']...(optinal) Position of the user when interacting with the POI
 * $_POST['uid']... Unique user identifier
 * $_POST['data']... (optional) if interaction type text, data may be sent with the interaction
 * 
 */
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
   <results>    
      <poi id=\"poi1\" interactionfeedback=\"none\">
         <name><![CDATA[Hello 3D World]]></name>
         <description><![CDATA[This is my first 3D POI.]]></description>
         <author>YOU</author>
         <date/>
         <l>37.8048,-122.295427,0</l>
         <o>0,0,0</o>
         <minaccuracy/>
         <maxdistance/>
         <mime-type>model/md2</mime-type>
         <mainresource>http://oaktopia.hyperlocative.com/resources/cyper.md2</mainresource>
         <force3d>true</force3d>
         <s>.6</s>
         <behaviours>
            <behaviour type=\"idle\">
               <!-- LENGTH: 0 for looping, amount of frames otherwise -->
               <length>0</length>
               <!-- NODE_ID: name of the animation in the 3D model -->
               <node_id>frame</node_id>
            </behaviour>
         </behaviours>
         <resources>
            <resource>http://oaktopia.hyperlocative.com/resources/cyber.png</resource>
         </resources>
         <thumbnail>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</thumbnail>
         <icon>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</icon>
         <homepage>http://www.metaio.com/</homepage>         
        </poi>
</results>";
?>
?>