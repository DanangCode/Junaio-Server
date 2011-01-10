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
       <poi id=\"1\" cosid=\"1\" interactionfeedback=\"none\">
       <name><![CDATA[metaio Man]]></name>
          <author><![CDATA[metaio]]></author>
          <translation>0.0,0.0,0.0</translation>
          <o>0, 1.57, 1.57</o>
          <mime-type>model/md2</mime-type>
          <mainresource><![CDATA[http://www.junaio.com/publisherDownload/tutorial/metaioman.md2_enc]]></mainresource>
          <thumbnail>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</thumbnail>
          <icon>http://www.junaio.com/publisherDownload/tutorial/icon.jpg</icon>
          <route>false</route>
          <force3d>true</force3d>
          <s>1</s>
          <behaviours>
             <behaviour type=\"click\"><length>6</length>
                <node_id>close_up</node_id></behaviour>
             <behaviour type=\"idle\"><length>0</length>
                  <node_id>idle</node_id></behaviour>
          </behaviours>
          <customizations>
                <customization>
                   <name>Name</name>
                   <type>sound</type>
                
                   <node_id>IDLE</node_id>
                   <value><![CDATA[http://posterous.com/getfile/files.posterous.com/jaspergregory/dYYL1e0uXkj4guzff8sRwz8Hl8G6hNe8NFWhoBusxOUBrPKq9FwYvihzfeyP/parallelsf-1.mp3]]></value>
                </customization>
             </customizations>
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
