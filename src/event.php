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
    <name><![CDATA[Hello Image POI]]></name>
    
    <description><![CDATA[[This is my first POI.]]></description>  

    <l>37.813463,-122.268412,0</l>
    <o>0,0,0</o>
    
    <mime-type>image/png</mime-type>

    <mainresource>http://ardevcamp.junaio.com/Tutorial/html/resources/fullscreen.jpg</mainresource>

    <thumbnail>http://ardevcamp.junaio.com/Tutorial/html/resources/logo.jpg</thumbnail>
    <icon>http://ardevcamp.junaio.com/Tutorial/html/resources/icon.jpg</icon> 

    </poi>
 <poi id=\"2\" interactionfeedback=\"none\">
    <name><![CDATA[Hello Image POI]]></name>

    <description><![CDATA[[This is my first POI.]]></description>

    <l>37.806156,-122.29708,0
</l>
    <o>0,0,0</o>

    <mime-type>image/png</mime-type>

    <mainresource>http://ardevcamp.junaio.com/Tutorial/html/resources/fullscreen.jpg</mainresource>

    <thumbnail>http://ardevcamp.junaio.com/Tutorial/html/resources/logo.jpg</thumbnail>
    <icon>http://ardevcamp.junaio.com/Tutorial/html/resources/icon.jpg</icon>

    </poi>
</results>";
?>
