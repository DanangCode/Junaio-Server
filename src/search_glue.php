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
    <results trackingurl=\"http://oaktopia.hyperlocative.com/resources/tracking.xml_enc\">
       <poi id=\"poi1\" cosid=\"1\" interactionfeedback=\"click\">
           
                  <name><![CDATA[Ein UFO]]></name>
                  <author>metaio GmbH</author>
                  <date/>
                  <l>37.806156,-122.295814,0</l>
                  <o>0,0,0</o>
                  <mime-type>model/md2</mime-type>
                  <mainresource>http://www.junaio.com/publisherDownload/tutorial/ufo3.md2_enc</mainresource>
                  <route>false</route>
                  <s>15</s>
                  <force3d>true</force3d>
                  <resources>
                     <resource>http://www.junaio.com/publisherDownload/tutorial/texture_ufo.png</resource> 
                  </resources>
                  <behaviours>
                     <behaviour type=\"idle\">
                        <length>0</length>
                        <node_id>idle</node_id>
                     </behaviour>
                     <behaviour type=\"click\">
                        <length>0</length>
                        <node_id>explosion</node_id>
                     </behaviour>
                  </behaviours>
               </poi>
           
    </results>";
?>
