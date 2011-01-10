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
   <poi id=\"1\" interactionfeedback=\"none\">
    <name><![CDATA[The Erotics Of Everyday Life]]></name>

     <description><![CDATA[Mama Buzz]]></description>  


     <l>37.868146,-122.264678,0</l>
     <o>0,0,0</o>

   <minaccuracy/>
          <maxdistance/>
          <mime-type>image/png</mime-type>
          <mainresource>http://hyperlocative.appspot.com/static/jasper_200.png</mainresource>

     <thumbnail>http://hyperlocative.appspot.com/static/jasper_100.png</thumbnail>
     <icon>http://hyperlocative.appspot.com/static/jasper_100.png</icon>
</results>";
?>
