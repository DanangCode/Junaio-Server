<?php
 
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
   <results>    
      <poi id=\"1\" interactionfeedback=\"click\">
         <name><![CDATA[3D World]]></name>
         <author>YOU</author>
         <date/>
         <l>37.805037,-122.294655,0</l>
         <o>0,0,0</o>
         <mime-type>model/md2</mime-type>           <mainresource>http://oaktopia.hyperlocative.com/resources/cyber.md2</mainresource>
         <force3d>false</force3d>
         <s>.7</s>        
         <resources>
            <resource>http://oaktopia.hyperlocative.com/resources/cyber.png</resource>
         </resources>
         <thumbnail>http://oaktopia.hyperlocative.com/resources/jasper_100.png</thumbnail>
         <icon>http://oaktopia.hyperlocative.com/resources/jasper_100.png</icon>
         <homepage>http://jasperswardrobe.com/</homepage>         
        </poi>
        
          <poi id=\"poi3\" interactionfeedback=\"click\">
               <name><![CDATA[Ein UFO]]></name>
               <author>metaio GmbH</author>
               <date/>
               <l>37.806156,-122.295814,0</l>
               <o>0,0,0</o>
               <mime-type>model/md2</mime-type>
               <mainresource>http://www.junaio.com/publisherDownload/tutorial/ufo3.md2_enc</mainresource>
               <route>false</route>
               <s>8</s>
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
