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
    <results trackingurl=\"http://oaktopia.hyperlocative.com/resources/tracking.xml_enc\">
       <poi id=\"1\" cosid=\"1\" interactionfeedback=\"none\">
       <name><![CDATA[metaio Man]]></name>
          <author><![CDATA[metaio]]></author>
          <translation>0.0,0.0,0.0</translation>
          <o>0.0,0.0,0.0</o>
          <mime-type>model/md2</mime-type>
          <mainresource><![CDATA[http://www.junaio.com/publisherDownload/tutorial/metaioman.md2_enc]]></mainresource>
          <thumbnail>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</thumbnail>
          <icon>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</icon>
          <route>false</route>
          <force3d>true</force3d>
          <s>1</s>
          <behaviours>
             <behaviour type=\"click\"><length>6</length><node_id>close_up</node_id></behaviour>
             <behaviour type=\"idle\"><length>0</length><node_id>idle</node_id></behaviour>
          </behaviours>
          <customizations/>
          <resources><resource>http://www.junaio.com/publisherDownload/tutorial/metaioman.png</resource></resources>         
       </poi>
              <poi id=\"2\" cosid=\"2\" interactionfeedback=\"none\">
              <name><![CDATA[TimeOut Video]]></name>
                      <author><![CDATA[metaio]]></author>
                      <o>0.0,0.0,0.0</o>
                      <translation>0,0,0.0</translation>
                      <minaccuracy>2</minaccuracy>
                      <maxdistance>100000</maxdistance>
                      <mime-type>model/md2</mime-type>
                      <mainresource>http://www.junaio.com/publisherDownload/tutorial/movieplane.md2_enc</mainresource>
                      <s>.3</s>
                      <force3d>true</force3d>
                      <resources>
                             <resource>http://www.junaio.com/publisherDownload/tutorial/insideAR.3gp</resource> 
                      </resources>      
              </poi>
    </results>";
?>