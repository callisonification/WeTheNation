<div id="footer_content">
  <div class="container"> <img src="<?php echo base_url('img/slices/alt_logo_16.png'); ?>" alt="WeTheNation"/>
    <div class="span2 footfix">
      <h6>WeTheNation:</h6>
      <ul class="footerlinks">
        <li><a href="#bug_modal" title="Report a Bug" data-toggle="modal">Report a Bug</a></li>
        <!-- Modal -->
        <div id="bug_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Report a Bug</h3>
            </div>
            <div class="modal-body">
                <form id="bugform" name="bugform" method="post" action="<?=site_url('email_handler/send_bug');?>">
                	<input type="text" class="text" name="subject" placeholder="Name the bug" />
                    <br />
                    <textarea name="message" placeholder="Explain the bug" rows="5"></textarea>
                    <br />
                    <input type="submit" class="btn" value="Send Message" />
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <li><a href="#contact_modal" title="Contact Us" data-toggle="modal">Contact Us</a></li>
        <!-- Modal -->
        <div id="contact_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Contact Us</h3>
            </div>
            <div class="modal-body">
                <form id="contactform" name="contactform" method="post" action="<?=site_url('email_handler/send_contact');?>">
                	<input type="text" class="text" name="subject" placeholder="Subject" />
                    <br />
                    <textarea name="message" placeholder="Message" rows="5"></textarea>
                    <br />
                    <input type="submit" class="btn" value="Send Message" />
	                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>                
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>        
        <li><a href="#sitemap_modal" title="View Site Map" data-toggle="modal">Site Map</a></li>
        <!-- Modal -->
        <div id="sitemap_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Site Map</h3>
            </div>
            <div class="modal-body">
				<p>Site map coming soon</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>        
        <li><a href="#tos_modal" title="Terms of Use Policy" data-toggle="modal">Terms of Service</a></li>
        <!-- Modal -->
        <div id="tos_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Terms of Service</h3>
            </div>
            <div class="modal-body">                
                <p><b>1. User's Acknowledgment and Acceptance of Terms</b></p>
                
                <p>WeTheNation (&quot;Us&quot; or &quot;We&quot;) provides the WeTheNation site and various related services (collectively, the &quot;site&quot;) to you, the user, subject to your compliance with all the terms, conditions, and notices contained or referenced herein (the &quot;Terms of Use&quot;), as well as any other written agreement between us and you. In addition, when using particular services or materials on this site, users shall be subject to any posted rules applicable to such services or materials that may contain terms and conditions in addition to those in these Terms of Use. All such guidelines or rules are hereby incorporated by reference into these Terms of Use.</p>
                
                <p>BY USING THIS SITE, YOU AGREE TO BE BOUND BY THESE TERMS OF USE. IF YOU DO NOT WISH TO BE BOUND BY THE THESE TERMS OF USE, PLEASE EXIT THE SITE NOW. YOUR REMEDY FOR DISSATISFACTION WITH THIS SITE, OR ANY PRODUCTS, SERVICES, CONTENT, OR OTHER INFORMATION AVAILABLE ON OR THROUGH THIS SITE, IS TO STOP USING THE SITE AND/OR THOSE PARTICULAR PRODUCTS OR SERVICES. YOUR AGREEMENT WITH US REGARDING COMPLIANCE WITH THESE TERMS OF USE BECOMES EFFECTIVE IMMEDIATELY UPON COMMENCEMENT OF YOUR USE OF THIS SITE.</p>
                
                <p>These Terms of Use are effective as of 11-06-2012. We expressly reserve the right to change these Terms of Use from time to time without notice to you. You acknowledge and agree that it is your responsibility to review this site and these Terms of Use from time to time and to familiarize yourself with any modifications. Your continued use of this site after such modifications will constitute acknowledgement of the modified Terms of Use and agreement to abide and be bound by the modified Terms of Use.</p>
                
                <p>As used in these Terms of Use, references to our &quot;Affiliates&quot; include our owners, subsidiaries, affiliated companies, officers, directors, suppliers, partners, sponsors, and advertisers, and includes (without limitation) all parties involved in creating, producing, and/or delivering this site and/or its contents.</p>
                
                <p><b>2. Description of Services</b></p>
                
                <p>We make various services available on this site including, but not limited to, information on congressional bills and members, and other like services. You are responsible for providing, at your own expense, all equipment necessary to use the services, including a computer, modem, and Internet access (including payment of all fees associated with such access).</p>
                
                <p>We reserve the sole right to either modify or discontinue the site, including any of the sites features, at any time with or without notice to you. We will not be liable to you or any third party should we exercise such right. Any new features that augment or enhance the then-current services on this site shall also be subject to these Terms of Use.</p>
                
                <p><b>3. Registration Data and Privacy</b></p>
                
                <p>In order to access some of the services on this site, you will be required to use an account and password that can be obtained by completing our online registration form, which requests certain information and data (&quot;Registration Data&quot;), and maintaining and updating your Registration Data as required. By registering, you agree that all information provided in the Registration Data is true and accurate and that you will maintain and update this information as required in order to keep it current, complete, and accurate.</p>
                
                <p>You also grant us the right to disclose to third parties certain Registration Data about you. The information we obtain through your use of this site, including your Registration Data, is subject to our <u>Privacy Policy</u>, which is specifically incorporated by reference into these Terms of Use.</p>
                
                <p><b>4. Conduct on Site</b></p>
                
                <p>Your use of the site is subject to all applicable laws and regulations, and you are solely responsible for the substance of your communications through the site. By posting information in or otherwise using any communications service, chat room, message board, newsgroup, software library, or other interactive service that may be available to you on or through this site, you agree that you will not upload, share, post, or otherwise distribute or facilitate distribution of any content -- including text, communications, software, images, sounds, data, or other information -- that:</p>
                
                <p>a. is unlawful, threatening, abusive, harassing, defamatory, libelous, deceptive, fraudulent, invasive of anothers privacy, tortious, contains explicit or graphic descriptions or accounts of sexual acts (including but not limited to sexual language of a violent or threatening nature directed at another individual or group of individuals), or otherwise violates our rules or policies;</p>
                
                <p>b. victimizes, harasses, degrades, or intimidates an individual or group of individuals on the basis of religion, gender, sexual orientation, race, ethnicity, age, or disability;</p>
                
                <p>c. infringes on any patent, trademark, trade secret, copyright, right of publicity, or other proprietary right of any party;</p>
                
                <p>d. constitutes unauthorized or unsolicited advertising, junk or bulk email (also known as &quot;spamming&quot;), chain letters, any other form of unauthorized solicitation, or any form of lottery or gambling;</p>
                
                <p>e. contains software viruses or any other computer code, files, or programs that are designed or intended to disrupt, damage, or limit the functioning of any software, hardware, or telecommunications equipment or to damage or obtain unauthorized access to any data or other information of any third party; or</p>
                
                <p>f. impersonates any person or entity, including any of our employees or representatives.</p>
                
                <p>We neither endorse nor assume any liability for the contents of any material uploaded or submitted by third party users of the site. We generally do not pre-screen, monitor, or edit the content posted by users of communications services, chat rooms, message boards, newsgroups, software libraries, or other interactive services that may be available on or through this site. However, we and our agents have the right at their sole discretion to remove any content that, in our judgment, does not comply with these Terms of Use and any other rules of user conduct for our site, or is otherwise harmful, objectionable, or inaccurate. We are not responsible for any failure or delay in removing such content. You hereby consent to such removal and waive any claim against us arising out of such removal of content. See &quot;Use of Your Materials&quot; below for a description of the procedures to be followed in the event that any party believes that content posted on this site infringes on any patent, trademark, trade secret, copyright, right of publicity, or other proprietary right of any party.</p>
                
                <p>In addition, you may not use your account to breach security of another account or attempt to gain unauthorized access to another network or server. Not all areas of the site may be available to you or other authorized users of the site. You shall not interfere with anyone elses use and enjoyment of the site or other similar services. Users who violate systems or network security may incur criminal or civil liability.</p>
                
                <p>You agree that we may at any time, and at our sole discretion, terminate your membership, account, or other affiliation with our site without prior notice to you for violating any of the above provisions. In addition, you acknowledge that we will cooperate fully with investigations of violations of systems or network security at other sites, including cooperating with law enforcement authorities in investigating suspected criminal violations.</p>
                
                <p><b>5. Third Party Sites and Information</b></p>
                
                <p>This site may link you to other sites on the Internet or otherwise include references to information, documents, software, materials and/or services provided by other parties. These sites may contain information or material that some people may find inappropriate or offensive. These other sites and parties are not under our control, and you acknowledge that we are not responsible for the accuracy, copyright compliance, legality, decency, or any other aspect of the content of such sites, nor are we responsible for errors or omissions in any references to other parties or their products and services. The inclusion of such a link or reference is provided merely as a convenience and does not imply endorsement of, or association with, the site or party by us, or any warranty of any kind, either express or implied.</p>
                
                <p><b>6. Intellectual Property Information</b></p>
                
                <p>Copyright (c) 11-06-2012 WeTheNation All Rights Reserved.</p>
                
                <p>For purposes of these Terms of Use, &quot;content&quot; is defined as any information, data, communications, software, photos, video, graphics, music, sounds, and other material and services that can be viewed by users on our site. This includes message boards, chat, and other original content.</p>
                
                <p>By accepting these Terms of Use, you acknowledge and agree that all content presented to you on this site is protected by copyrights, trademarks, service marks, patents or other proprietary rights and laws, and is the sole property of WeTheNation and/or its Affiliates. You are only permitted to use the content as expressly authorized by us or the specific content provider. Except for a single copy made for personal use only, you may not copy, reproduce, modify, republish, upload, post, transmit, or distribute any documents or information from this site in any form or by any means without prior written permission from us or the specific content provider, and you are solely responsible for obtaining permission before reusing any copyrighted material that is available on this site. Any unauthorized use of the materials appearing on this site may violate copyright, trademark and other applicable laws and could result in criminal or civil penalties.</p>
                
                <p>Neither we or our Affiliates warrant or represent that your use of materials displayed on, or obtained through, this site will not infringe the rights of third parties. See &quot;Users Materials&quot; below for a description of the procedures to be followed in the event that any party believes that content posted on this site infringes on any patent, trademark, trade secret, copyright, right of publicity, or other proprietary right of any party.</p>
                
                <p>The following are registered trademarks, trademarks or service marks of WeTheNation or its Affiliates: logos, phrases, design, artwork. All custom graphics, icons, logos and service names are registered trademarks, trademarks or service marks of WeTheNation or its Affiliates. All other trademarks or service marks are property of their respective owners. Nothing in these Terms of Use grants you any right to use any trademark, service mark, logo, and/or the name of WeTheNation or its Affiliates.</p>
                
                <p><b>7. Unauthorized Use of Materials</b></p>
                
                <p>Subject to our Privacy Policy, any communication or material that you transmit to this site or to us, whether by electronic mail, post, or other means, for any reason, will be treated as non-confidential and non-proprietary. While you retain all rights in such communications or material, you grant us and our agents and affiliates a non-exclusive, paid-up, perpetual, and worldwide right to copy, distribute, display, perform, publish, translate, adapt, modify, and otherwise use such material for any purpose regardless of the form or medium (now known or not currently known) in which it is used.</p>
                
                <p>Please do not submit confidential or proprietary information to us unless we have mutually agreed in writing otherwise. We are also unable to accept your unsolicited ideas or proposals, so please do not submit them to us in any circumstance.</p>
                
                <p>We respect the intellectual property of others, and we ask you to do the same. If you or any user of this site believes its copyright, trademark or other property rights have been infringed by a posting on this site, you or the user should send notification to our Designated Agent (as identified below) immediately. To be effective, the notification must include:</p>
                
                <p>1. Identify in sufficient detail the copyrighted work that you believe has been infringed upon or other information sufficient to specify the copyrighted work being infringed).</p>
                
                <p>2. Identify the material that you claim is infringing the copyrighted work listed in item #1 above.</p>
                
                <p>3. Provide information reasonably sufficient to permit us to contact you (email address is preferred).</p>
                
                <p>4. Provide information, if possible, sufficient to permit us to notify the owner/administrator of the allegedly infringing webpage or other content (email address is preferred).</p>
                
                <p>5. Include the following statement: "I have a good faith belief that use of the copyrighted materials described above as allegedly infringing is not authorized by the copyright owner, its agent, or the law."</p>
                
                <p>6. Include the following statement: "I swear, under penalty of perjury, that the information in the notification is accurate and that I am the copyright owner or am authorized to act on behalf of the owner of an exclusive right that is allegedly infringed."</p>
                
                <p>7. Sign the paper.</p>
                
                <p>8. Send the written communication to the following address:</p>
                
                <p>Designated Agent for Claimed Infringement:</p>
                
                <p>Contact: Chris Allison<br />Address: admin@wethenation.us</p>
                
                <p>You acknowledge and agree that upon receipt of a notice of a claim of copyright infringement, we may immediately remove the identified materials from our site without liability to you or any other party and that the claims of the complaining party and the party that originally posted the materials will be referred to the United States Copyright Office for adjudication as provided in the Digital Millennium Copyright Act.</p>
                
                <p><b>8. Disclaimer of Warranties</b></p>
                
                <p>ALL MATERIALS AND SERVICES ON THIS SITE ARE PROVIDED ON AN &quot;AS IS&quot; AND &quot;AS AVAILABLE&quot; BASIS WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, OR THE WARRANTY OF NON-INFRINGEMENT. WITHOUT LIMITING THE FOREGOING, WE MAKE NO WARRANTY THAT (A) THE SERVICES AND MATERIALS WILL MEET YOUR REQUIREMENTS, (B) THE SERVICES AND MATERIALS WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE, (C) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICES OR MATERIALS WILL BE EFFECTIVE, ACCURATE OR RELIABLE, OR (D) THE QUALITY OF ANY PRODUCTS, SERVICES, OR INFORMATION PURCHASED OR OBTAINED BY YOU FROM THE SITE FROM US OR OUR AFFILIATES WILL MEET YOUR EXPECTATIONS OR BE FREE FROM MISTAKES, ERRORS OR DEFECTS.</p>
                
                <p>THIS SITE COULD INCLUDE TECHNICAL OR OTHER MISTAKES, INACCURACIES OR TYPOGRAPHICAL ERRORS. WE MAY MAKE CHANGES TO THE MATERIALS AND SERVICES AT THIS SITE, INCLUDING THE PRICES AND DESCRIPTIONS OF ANY PRODUCTS LISTED HEREIN, AT ANY TIME WITHOUT NOTICE. THE MATERIALS OR SERVICES AT THIS SITE MAY BE OUT OF DATE, AND WE MAKE NO COMMITMENT TO UPDATE SUCH MATERIALS OR SERVICES.</p>
                
                <p>THE USE OF THE SERVICES OR THE DOWNLOADING OR OTHER ACQUISITION OF ANY MATERIALS THROUGH THIS SITE IS DONE AT YOUR OWN DISCRETION AND RISK AND WITH YOUR AGREEMENT THAT YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM SUCH ACTIVITIES.</p>
                
                <p>Through your use of the site, you may have the opportunities to engage in commercial transactions with other users and vendors. You acknowledge that all transactions relating to any merchandise or services offered by any party, including, but not limited to the purchase terms, payment terms, warranties, guarantees, maintenance and delivery terms relating to such transactions, are agreed to solely between the seller or purchaser of such merchandize and services and you. WE MAKE NO WARRANTY REGARDING ANY TRANSACTIONS EXECUTED THROUGH, OR IN CONNECTION WITH THIS SITE, AND YOU UNDERSTAND AND AGREE THAT SUCH TRANSACTIONS ARE CONDUCTED ENTIRELY AT YOUR OWN RISK. ANY WARRANTY THAT IS PROVIDED IN CONNECTION WITH ANY PRODUCTS, SERVICES, MATERIALS, OR INFORMATION AVAILABLE ON OR THROUGH THIS SITE FROM A THIRD PARTY IS PROVIDED SOLELY BY SUCH THIRD PARTY, AND NOT BY US OR ANY OTHER OF OUR AFFILIATES.</p>
                
                <p>Content available through this site often represents the opinions and judgments of an information provider, site user, or other person or entity not connected with us. We do not endorse, nor are we responsible for the accuracy or reliability of, any opinion, advice, or statement made by anyone other than an authorized WeTheNation spokesperson speaking in his/her official capacity. Please refer to the specific editorial policies posted on various sections of this site for further information, which policies are incorporated by reference into these Terms of Use.</p>
                
                <p>You understand and agree that temporary interruptions of the services available through this site may occur as normal events. You further understand and agree that we have no control over third party networks you may access in the course of the use of this site, and therefore, delays and disruption of other network transmissions are completely beyond our control.</p>
                
                <p>You understand and agree that the services available on this site are provided &quot;AS IS&quot; and that we assume no responsibility for the timeliness, deletion, mis-delivery or failure to store any user communications or personalization settings.</p>
                
                <p>SOME STATES OR JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES, SO SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.</p>
                
                <p><b>9. Limitation of Liability</b></p>
                
                <p>IN NO EVENT SHALL WE OR OUR AFFILIATES BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY SPECIAL, PUNITIVE, INCIDENTAL, INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND, OR ANY DAMAGES WHATSOEVER, INCLUDING, WITHOUT LIMITATION, THOSE RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER OR NOT WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, AND ON ANY THEORY OF LIABILITY, ARISING OUT OF OR IN CONNECTION WITH THE USE OF THIS SITE OR OF ANY WEB SITE REFERENCED OR LINKED TO FROM THIS SITE.</p>
                
                <p>FURTHER, WE SHALL NOT BE LIABLE IN ANY WAY FOR THIRD PARTY GOODS AND SERVICES OFFERED THROUGH THIS SITE OR FOR ASSISTANCE IN CONDUCTING COMMERCIAL TRANSACTIONS THROUGH THIS SITE, INCLUDING WITHOUT LIMITATION THE PROCESSING OF ORDERS.</p>
                
                <p>SOME JURISDICTIONS PROHIBIT THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, SO THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.</p>
                
                <p><b>10. Indemnification</b></p>
                
                <p>Upon a request by us, you agree to defend, indemnify, and hold us and our Affiliates harmless from all liabilities, claims, and expenses, including attorneys fees, that arise from your use or misuse of this site. We reserve the right, at our own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, in which event you will cooperate with us in asserting any available defenses.</p>
                
                <p><b>11. Security and Password</b></p>
                
                <p>You are solely responsible for maintaining the confidentiality of your password and account and for any and all statements made and acts or omissions that occur through the use of your password and account. Therefore, you must take steps to ensure that others do not gain access to your password and account. Our personnel will never ask you for your password. You may not transfer or share your account with anyone, and we reserve the right to immediately terminate your account  if you do transfer or share your account.</p>
                
                <p><b>12. Participation in Promotions</b></p>
                
                <p>From time to time, this site may include advertisements offered by third parties. You may enter into correspondence with or participate in promotions of the advertisers showing their products on this site. Any such correspondence or promotions, including the delivery of and the payment for goods and services, and any other terms, conditions, warranties or representations associated with such correspondence or promotions, are solely between you and the advertiser. We assume no liability, obligation or responsibility for any part of any such correspondence or promotion.</p>
                
                <p><b>13. E-mail, Messaging, Blogging, and Chat Services</b></p>
                
                <p>We may make email, messaging, blogging, or chat services (collectively, &quot;Communications&quot;) available to users of our site, either directly or through a third-party provider.  We make available separate supplemental agreements characterizing the relationship between you and us that, except where expressly noted or contradictory, includes these Terms.</p>
                
                <p>We will not inspect or disclose the contents of private Communications except with the consent of the sender or the recipient, or in the narrowly-defined situations provided under the Electronic Communications Privacy Act, or as other required by law or by court or governmental order. Further information is available in our Privacy Policy.</p>
                
                <p>We may employ automated monitoring devices or techniques to protect our users from mass unsolicited communications (also known as &quot;spam&quot;) and/or other types of electronic communications that we deem inconsistent with our business purposes. However, such devices or techniques are not perfect, and we will not be responsible for any legitimate communication that is blocked, or for any unsolicited communication that is not blocked.</p>
                
                <p>Mailboxes may have a limited storage capacity. If you exceed the maximum permitted storage space, we may employ automated devices that delete or block email messages that exceed the limit. We will not be responsible for such deleted or blocked messages.</p>
                
                <p><b>14. International Use</b></p>
                
                <p>Although this site may be accessible worldwide, we make no representation that materials on this site are appropriate or available for use in locations outside the United States, and accessing them from territories where their contents are illegal is prohibited. Those who choose to access this site from other locations do so on their own initiative and are responsible for compliance with local laws. Any offer for any product, service, and/or information made in connection with this site is void where prohibited.</p>
                
                <p><b>15. Termination of Use</b></p>
                
                <p>You agree that we may, in our sole discretion, terminate or suspend your access to all or part of the site with or without notice and for any reason, including, without limitation, breach of these Terms of Use. Any suspected fraudulent, abusive or illegal activity may be grounds for terminating your relationship and may be referred to appropriate law enforcement authorities.</p>
                
                <p>Upon termination or suspension, regardless of the reasons therefore, your right to use the services available on this site immediately ceases, and you acknowledge and agree that we may immediately deactivate or delete your account and all related information and files in your account and/or bar any further access to such files or this site. We shall not be liable to you or any third party for any claims or damages arising out of any termination or suspension or any other actions taken by us in connection with such termination or suspension.</p>
                
                <p><b>16. Governing Law</b></p>
                
                <p>This site (excluding any linked sites) is controlled by us from our offices within the Winter Park, FL, United States of America. It can be accessed from all 50 states, as well as from other countries around the world. As each of these places has laws that may differ from those of Winter Park, FL, by accessing this site both of us agree that the statutes and laws of the State of Winter Park, FL, without regard to the conflicts of laws principles thereof and the United Nations Convention on the International Sales of Goods, will apply to all matters relating to the use of this site and the purchase of products and services available through this site. Each of us agrees and hereby submits to the exclusive personal jurisdiction and venue any court of competent jurisdiction within the State of Winter Park, FL with respect to such matters.</p>
                
                <p><b>17. Notices</b></p>
                
                <p>All notices to a party shall be in writing and shall be made either via email or conventional mail. Notices to us must be sent to the attention of Customer Service at admin@wethenation.us, if by email, or at WeTheNation no address if by conventional mail. Notices to you may be sent to the address supplied by you as part of your Registration Data. In addition, we may broadcast notices or messages through the site to inform you of changes to the site or other matters of importance, and such broadcasts shall constitute notice to you at the time of sending.</p>
                
                <p><b>18. Entire Agreement</b></p>
                
                <p>These terms and conditions constitute the entire agreement and understanding between us concerning the subject matter of this agreement and supersedes all prior agreements and understandings of the parties with respect to that subject matter. These Terms of Use may not be altered, supplemented, or amended by the use of any other document(s). Any attempt to alter, supplement or amend this document or to enter an order for products or services which are subject to additional or altered terms and conditions shall be null and void, unless otherwise agreed to in a written agreement signed by you and us. To the extent that anything in or associated with this site is in conflict or inconsistent with these Terms of Use, these Terms of Use shall take precedence.</p>
                
                <p><b>19. Miscellaneous</b></p>
                
                <p>In any action to enforce these Terms of Use, the prevailing party will be entitled to costs and attorneys fees. Any cause of action brought by you against us or our Affiliates must be instituted with one year after the cause of action arises or be deemed forever waived and barred.</p>
                
                <p>You may not assign your rights and obligations under these Terms of Use to any party, and any purported attempt to do so will be null and void. We may free assign our rights and obligations under these Terms of Use.</p>
                
                <p>You agree not to sell, resell, reproduce, duplicate, copy or use for any commercial purposes any portion of this site, or use of or access to this site.</p>
                
                <p>In addition to any excuse provided by applicable law, we shall be excused from liability for non-delivery or delay in delivery of products and services available through our site arising from any event beyond our reasonable control, whether or not foreseeable by either party, including but not limited to, labor disturbance, war, fire, accident, adverse weather, inability to secure transportation, governmental act or regulation, and other causes or events beyond our reasonable control, whether or not similar to those which are enumerated above.</p>
                
                <p>If any part of these Terms of Use is held invalid or unenforceable, that portion shall be construed in a manner consistent with applicable law to reflect, as nearly as possible, the original intentions of the parties, and the remaining portions shall remain in full force and effect.</p>
                
                <p>Any failure by us to enforce or exercise any provision of these Terms of Use or related rights shall not constitute a waiver of that right or provision.</p>
                
                <p><b>20. Contact Information</b></p>
                
                <p>Except as explicitly noted on this site, the services available through this site are offered by WeTheNation. If you notice that any user is violating these Terms of Use, please contact us at admin@wethenation.us.</p><h2>Blog and Message Board Terms of Use</h2>
                
                <p>WeTheNation (&quot;We&quot; or &quot;Us&quot; or &quot;Our&quot;) offers the use of its blogging and message board services (along with the content posted thereon, the &quot;Services&quot;) subject to the terms and conditions of use (the &quot;Terms&quot;) contained herein. All references herein to &quot;We,&quot; &quot;Us,&quot; or &quot;Our&quot; are intended to include WeTheNation and any other affiliated companies. By accessing, creating or contributing to any blogs or messages hosted by us (the &quot;Blog&quot;), and in consideration for the Services we provide to you, you agree to abide by these Terms. Please read them carefully before posting to or creating any Blog. We reserve the right to change, at any time, at our sole discretion, the Terms under which these Services are offered. You are responsible for regularly reviewing these Terms for changes. Your continued use of the Services constitutes your acceptance of all such Terms. If you do not agree with these Terms, please do not use the Services.</p>
                
                <p><b>1. Disclaimer of Company Responsibility for Blog Content</b></p>
                
                <p>You understand that all content posted to the Blog (the &quot;Content&quot;) is the sole responsibility of the individual who originally posted the content. You understand, also, that all opinions expressed by users of this site are expressed strictly in their individual capacities, and not as Our representatives or any of Our sponsors or partners. The opinions that you or others post in the Blog do not necessarily reflect Our opinions.</p>
                
                <p><b>2. Posting</b></p>
                
                <p>(a) By posting your Content using the Services, you are granting an unrestricted, irrevocable, non-exclusive, royalty-free, perpetual, worldwide, and fully transferable, assignable, and sublicensable right and license to use, copy, reproduce, modify, adapt, publish, translate, create collective or derivative works from, distribute, perform and display your Content in whole or in part and to incorporate it in other works in any form, media, or technology now known or later developed. You further warrant that all so-called moral rights in the content have been waived.</p>
                
                <p>(b) By posting content to the Blog, you warrant and represent that you either own or otherwise control all of the rights to that content, including, without limitation, all the rights necessary for you to provide, post, upload, input or submit the content, or that your use of the content is a protected fair use. You agree that you will not knowingly provide material and misleading false information. You represent and warrant also that the content you supply does not violate these Terms. It is your sole responsibility to ensure that your postings do not disclose confidential and/or proprietary information, including personal financial information, information covered by a nondisclosure agreement, and information that you are not authorized to disclose. We caution you not to disclose personal information about yourself or your children, such as social security numbers, credit card numbers, etc.</p>
                
                <p>(c) You agree to indemnify and hold Us and Our affiliated companies, and their directors, officers and employees, harmless for any and all claims or demands, including reasonable attorney fees, that arise from or otherwise relate to your use of the Blog, any content you supply to the Blog, or your violation of these Terms or the rights of another.</p>
                
                <p><b>3. Accessing</b></p>
                
                <p>(a) You agree that We will not be liable, under any circumstances and in any way, for any errors or omissions, loss or damage of any kind incurred as a result of use of any content posted on this site. You agree that you must evaluate and bear all risks associated with the use of any content, including any reliance on the accuracy, completeness, or usefulness of such content. You agree not to collect information about others, including e-mail addresses, or to use information obtained from the Services to send other users unsolicited e-mail of any kind.</p>
                
                <p>(b) The Blog is provided for informational purposes only; we shall not be responsible or liable for the accuracy or availability of any information appearing or available on the Blog.</p>
                
                <p>(c) Blog postings may provide links to other websites on the Internet. We are not responsible or liable for such content and we make no express or implied warranty about the accuracy, copyright compliance, legality, merchantability, or any other aspect of the content of such postings. We are not responsible or liable for any advertising, products, or other materials on or available from such websites or resources. The inclusion of links does not imply endorsement of the Websites by Us or any association with their operators.</p>
                
                <p>(d) We may enable you to establish an account with a username and password to access and use the Services. If so, you are responsible for maintaining the strict confidentiality of your password, and you are responsible for any activity occurring through use of your account and password. You agree to immediately notify us of any unauthorized use of your password or account or any other breach of security and ensure that you exit from your account at the end of each session. We are not responsible or liable for any loss or damage arising from your failure to comply with this provision.</p>
                
                <p><b>4. Children</b></p>
                
                <p>Collecting personal information from children under the age of 18 (&quot;minor children&quot;) through the Services or the Blog is prohibited. No Content should be directed toward minor children. Minor children are not eligible to use the site, and we ask that they do not submit any personal information to us.</p>
                
                <p><b>5. Privacy Policy</b></p>
                
                <p>Please be sure to read our Privacy Policy, which is available at this website and incorporated herein by reference.</p>
                
                <p><b>6. Unauthorized Use of Materials</b></p>
                
                <p>See Website Terms of Use</p>
                
                <p><b>7. Termination of Access/Removal of Content</b></p>
                
                <p>We shall have the right in Our sole discretion to terminate your access to and use of the Services and/or remove any of your Content should We consider your statements or conduct to be inaccurate, illegal, obscene, defamatory, threatening, infringing of intellectual property rights, invasive of privacy, injurious, objectionable, or otherwise in violation of these Terms or applicable law.</p>
                
                <p><b>8. Disclaimer of Warranties</b></p>
                
                <p>See Website Terms of Use</p>
                
                <p><b>9. Limitation of Liability</b></p>
                
                <p>See Website Terms of Use</p>
                
                <p><b>10. Acceptance and Acknowledgement of Terms</b></p>
                
                <p>Use of this website constitutes acceptance of these Terms. You acknowledge that you have read and are bound by the Terms, as well as any other usage agreements of Ours, including the Website Terms of Use that may govern your conduct. Thank you for participating in the Blog. Please do not hesitate to contact us at admin@wethenation.us if you have questions.</p>
                
                <p>Generated by: <a target="_blank" title="Northern Virginia Business Attorneys and Lawyers" href="http://www.generalcounsellaw.com">General Counsel, PC</a> and <a target="_blank" title="Small Business Attorneys and Lawyers" href="http://www.LegalRiver.com">Legal River</a>'s <a target="_blank" title="Terms of Service Generator" href="http://tos.legalriver.com">Terms of Service Generator</a></p>            
            </div>
            <div class="modal-footer">
            </div>
        </div>        
        <li><a href="#pp_modal" title="Privacy Policy" data-toggle="modal">Privacy Policy</a></li>
        <!-- Modal -->
        <div id="pp_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Privacy Policy</h3>
            </div>
            <div class="modal-body">
                <p>When accessing our Website, WeTheNation will learn certain information about you during your visit. How we will handle information we learn about you depends upon what you do when visiting our site.</p>
                <p>If you visit our site to read or download information on our pages, we collect and store only the following information about you:</p>
                <p>1. The name of the domain from which you access the Internet<br />2. The date and time you access our site<br />3. The Internet address of the website you used to link directly to our site<br />4. email address<br />4. zip code</p>
                <p>If you identify yourself by sending us an e-mail containing personal information, then the information collected will be solely used to respond to your message.</p>
                <p>The information collected is for statistical purposes. WeTheNation may use software programs to create summary statistics, which are used for such purposes as assessing the number of visitors to the different sections of our site, what information is of most and least interest, determining technical design specifications, and identifying system performance or problem areas.</p>
                <p>For site security purposes and to ensure that this service remains available to all users, WeTheNation uses software programs to monitor network traffic to identify unauthorized attempts to upload or change information, or otherwise cause damage.</p>
                <p>WeTheNation will not obtain personally-identifying information about you when you visit our site, unless you choose to provide such information to us, nor will such information be sold or otherwise transferred to unaffiliated third parties without the approval of the user at the time of collection.</p>
                <p>Generated by: <a target="_blank" title="Northern Virginia Business Attorneys and Lawyers" href="http://www.generalcounsellaw.com">General Counsel, PC</a> and <a target="_blank" title="Small Business Attorneys and Lawyers" href="http://www.LegalRiver.com">Legal River</a>'s <a target="_blank" title="Privacy Policy Generator" href="http://privacy-policy-generator.legalriver.com">Privacy Policy Generator</a></p>
            </div>
            <div class="modal-footer">
            </div>
        </div>        
      </ul>
    </div>
    <div class="span2 footfix2">
      <h6>Go To:</h6>
      <ul class="footerlinks">
        <li><a href="<?php echo site_url('bill_list');?>" title="View all Bills">All Bills</a></li>
        <li><a href="<?php echo site_url('bill_list/senate_bills');?>" title="View Senate Bills">Senate bills</a></li>
        <li><a href="<?php echo site_url('member_list/senate_members');?>" title="View Senate Members">Senate Members</a></li>
        <li><a href="<?php echo site_url('bill_list/house_bills');?>" title="View House Bills">House bills</a></li>
        <li><a href="<?php echo site_url('member_list/house_members');?>" title="View House Members">House Members</a></li>
      </ul>
    </div>
    <div class="span4 offset1" id="connect">
      <h6>Connect With Us:</h6>
      <ul id="badges">
        <li><a href="https://www.facebook.com/WeTheNati0n" title="Facebook" id="fb" target="new">Facebook</a></li>
        <li><a href="https://twitter.com/WeTheNati0n" title="Twitter" id="tw" target="new">Twitter</a></li>
        <li><a href="https://github.com/callisonification/WeTheNation" title="Github" id="gh" target="new">Github</a></li>
      </ul>
    </div>
    <div class="span5" id="newsletter">
      <h6>Sign up for our Newsletter:</h6>
      <p>Sign up for our newletter to receive updates about the site, its members, and future updates and features</p>
      <form class="navbar-form pull-left">
        <button type="submit" class="btn"><i class="icon-envelope"></i></button>
        <input type="text" class="span4" placeholder="Enter email address">
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>WeTheNation.us &copy; 2012 :: All Rights Reserved</p>
  </div>
</div>
</body>
<!-- JQUERY SCRIPT -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<!-- Bootstrap plugin -->
<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('js/main.js');?>"></script>
<script src="<?php echo base_url('js/jquery_scrollTo.1.4.3.min.js');?>"></script>
<!-- Custom Plugins -->
</html>
