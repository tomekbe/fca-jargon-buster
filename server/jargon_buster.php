<?php
//$data = getDataAsJSON($_GET['id']);
//echo $_GET['jsonp_callback'] . '(' . $data . ');';

// jargon buster dictionary

header('Access-Control-Allow-Origin: *');
header('Content-Type: ' . ($callback ? 'application/javascript' : 'application/json') . ';charset=UTF-8');

$data = array(
    (object)array(
        'word' => 'appointed representative',
        'definition' => 'In broad terms, an appointed representative is a business which is not authorised, but has a contract with a firm (called ‘the principal’) that allows it to carry out certain activities under the permission of the principal. There are certain requirements around who can be an appointed representative, 
        set out on  <a href="http://www.fca.org.uk/firms/firm-types/consumer-credit/authorisation/principals-and-appointed-representatives">this page</a>',
    ),
    (object)array(
        'word' => 'approved person',
        'definition' => 'At least one individual in most consumer credit firms must be approved by us when a
firm applies to be authorised. The exception is most providers of not-for-profit debt
advice and some sole traders. Approved persons are individuals who are approved to
perform certain functions on behalf of a firm, and these functions are called ‘controlled
functions’. We can approve an individual only when we are satisfied that they are fit and
proper to perform the controlled function(s) they apply for. More detail on approved
persons is available in our guide for firms.',
    ),
     (object)array(
        'word' => 'authorised',
        'definition' => 'If your application is approved by the "FCA" you will be authorised. Firms and individuals
can only conduct regulated activities in the UK if they are authorised by us to do so.',
    ),  (object)array(
        'word' => 'branches',
        'definition' => 'An establishment that is part of your firm, but not your principal place of business,
and where your firm provides products or services, whether face-to-face or over the
telephone.',
    ),
     (object)array(
        'word' => 'business plan',
        'definition' => '<p>This will set out your business aims and objectives and detail how you will organise your resources to achieve them. The level of detail that your plan goes into should be
proportionate to the complexity and scale of your business. Your business plan will help
us assess the adequacy of your resources and the suitability of your business model.</p> <p>If you apply for full permission you must attach this to the online application form. If you
apply for limited permission you will not need to include it with your application but you
should be able to provide it later if we request it.</p>
<p>The business plan should include:</p>
<b>General information</b>
<ul>
<li> The background to the business.</li>
<li> Why you wish to carry out regulated activities.</li>
<li> Whether you have identified a particular business opportunity or identified a specific
customer base </li>
<li>Any long-term strategy and expansion plans for your business, generally. </li>
<li>Whether you plan to outsource functions to other companies, use self-employed
agents, compliance consultants, appointed representatives or a franchise business
model, and how you will control these relationships.</li>
<li>The experience of the senior management of your firm and their responsibilities,
including identifying areas they may specialise in.</li>
</ul>
<p><b>Information on customers</b></p>
<ul>
<li>Where you will source customers from (e.g. existing client base, credit brokers or lead
generators). </li>
<li>Key risks to your firm and your customers and how you propose to protect against
these. This will include how you plan to treat customers fairly, deal with vulnerable
customers or those in financial difficulty and protect against the risk of fraud and crime.</li>
<li>How you will assess affordability and creditworthiness and your process for rollover/
extension or re-financing decisions (if applicable). </li>
<li>Whether you report data to and use credit reference agencies.</li>
<li>Your plans in relation to financial promotions (e.g. website material, brochures and other advertising) and how you will ensure these comply with the consumer credit
rules in the FCA Handbook (set out in CONC 3). </li>
</ul>
<p><b>Products and procedures</b></p>
<ul>
<li>Details of your sales process.</li>
<li>The types of products you will sell, any associated products, how you will take
payments (for example continuous payment authority) and whether you seek any
guarantees.</li>
<li>Whether you incentivise staff and how you do this. For example, do you have
incentives based on sales? If you offer a financial incentive, how do you calculate it?</li>
<li>Details of any case management procedures you have and how you ensure the
accuracy of information provided to you.</li>
<li>Procedures for valuing customers’ assets (if applicable).</li>
<li>The proportion of arrears or defaults (if applicable). </li>
<li>Your arrears and recovery procedures and any template documents you use or intend
to use, if relevant.</li>
<li>The proportion of debts that you take legal action to recover (if applicable).</li>
<li>Whether you are a member of a trade body or professional association. </li>
<li>For debt-management firms, the proportion of debt-management plans that are not
completed (for example those where a customer enters into another debt solution,
settles their debts, stops paying or if contact is lost).</li>',
    ),
(object)array(
        'word' => 'business risks',
        'definition' => '<p>The key risks that your business faces, that could impact on your ability to meet FCA
requirements. These will depend on the nature of your business.</p>
<p>
Examples include your firm getting into financial difficulties, clients being given unsuitable
advice, or inadequate systems and controls.</p>',
    ),
(object)array(
        'word' => 'client money',
        'definition' => '<p>This will only be relevant to certain types of consumer credit firms:</p>
<p>For CASS debt management firms  <a href="http://www.fshandbook.info/FS/glossary-html/handbook/Glossary/C?definition=G3295" target="_blank">see our Handbook for the definition:</a> this means money of
any currency it receives or holds on behalf of a client in the course of, or in connection
with, debt management activity.</p>
<p>For operators of an electronic system in relation to lending, it means money of any
currency that the firm holds for clients in the course of operating an electronic system in
relation to lending, but only in relation to facilitating a person becoming a lender under a
peer-to-peer agreement and in relation to certain supplemental activities.</p>
<p><a href="http://www.fshandbook.info/FS/glossary-html/handbook/
Glossary/C?definition=G160"> See our Handbook for the definition: </a></p>',
    ),

(object)array(
        'word' => 'compliance procedures',
        'definition' => '<p>Compliance procedures are a set of procedures that are put in place to ensure that a firm
meets the regulatory requirements. The areas we expect to be covered include record
keeping, complaints handling, reporting requirements, and protecting customer interests.
This is covered in detail in our guidance notes:</p><p>Limited permission notes pages 19-20</p>
<p>Full permission notes pages 28-29</p>
',
    ),
(object)array(
        'word' => 'Compliance monitoring programme document',
        'definition' => '<p>A document that shows how you establish, maintain and carry out a programme of actions
to check that your firm complies and continues to comply with its compliance procedures.
This is covered in detail in our guidance notes, with an example of what one looks like:
</p><p>Limited permission notes</p>
<p>Full permission notes</p>
',
    ),
(object)array(
        'word' => 'CONC – the Consumer Credit sourcebook',
        'definition' => '<p>A document that shows how you establish, maintain and carry out a programme of actions
to check that your firm complies and continues to comply with its compliance procedures.
This is covered in detail in our guidance notes, with an example of what one looks like:
</p><p>Limited permission notes</p>
<p>Full permission notes</p>
',
    ),
(object)array(
        'word' => 'Consumer credit income',
        'definition' => '<p>We have set a definition of this and how you should calculate it in your application form.
See our Handbook: <a href="http://www.fshandbook.info/FS/html/FCA/FEES/4/Annex11B">www.fshandbook.info/FS/html/FCA/FEES/4/Annex11B</a>
</p>
',
    ),
(object)array(
        'word' => 'Continuous payment authority',
        'definition' => '<p>A continuous payment authority exists when a customer has given consent to a firm to
debit one or more payments from the customer’s payment account (for example, to
satisfy regular payments that the customer must make to the firm).
</p>
',
    ),
(object)array(
        'word' => 'Controller',
        'definition' => '<p>This is a very broad concept, and generally speaking includes the beneficial owners of the
business, who may be individuals or firms with an indirect shareholding in your firm.</p><p>In more complex corporate structures, it can also include individuals, other than shareholders,
who may be entitled to exercise significant influence over the management of the firm.
This is not applicable to sole traders.</p>
',
    ),
(object)array(
        'word' => 'Credit-related regulated activity',
        'definition' => '<p>Firms need FCA authorisation for the following consumer credit activities:</p>
        <ul >
        <li>entering into a regulated credit agreement as lender;</li>
        <li>exercising, or having the right to exercise, the lender’s rights and duties under a
regulated credit agreement;</li>
<li>credit broking;</li>
<li>debt adjusting;</li>
<li>debt counselling;</li>
<li>debt collecting;</li>
<li>debt administration;</li>
<li>entering into a regulated consumer hire agreement as owner;</li>
<li>exercising, or having the right to exercise, the owner’s rights and duties under a regulated consumer hire agreement;</li>
<li>providing credit information services;</li>
<li>providing credit references;</li>
<li>operating an electronic system in relation to lending;</li>
<li>agreeing to carry on a regulated activity (so far as relevant to any of the activities in
points 1 to 9; which is carried on by way of business and relates to a specified
investment applicable to that activity or, in the case of point 10 to 11, relates to
information about a person’s financial standing. The activities are set out in full in
our Handbook (alongside other FCA regulated activities):<a href="http://www.fshandbook.info/FS/
html/FCA/PERG/2/7]">www.fshandbook.info/FS/
html/FCA/PERG/2/7]</a></li>
        </ul>
',
    ),
(object)array(
        'word' => 'disclosure documents',
        'definition' => '<p>The documents such as the pre-contract information (SECCI – Standard European
Consumer Credit Information) and the specified information in agreements that firms
give to their customers.</p>
',
    ),
(object)array(
        'word' => 'domestic premises supplier',
        'definition' => '<p>Domestic premises supplier
A supplier who sells goods or supplies services to customers who are individuals while
they are present in the customer’s home. Note that a supplier who does so on an
occasional basis is not treated as a domestic premises supplier.</p>
',
    ),
(object)array(
        'word' => 'FCA Handbook',
        'definition' => '<p>Where the FCA rules and guidance are set out:</p>
        <p><a href="http://www.fshandbook.info/FS/index.jsp">www.fshandbook.info/FS/index.jsp</a></p>',
    ),
(object)array(
        'word' => 'Financial crime and money laundering procedures',
        'definition' => '<p>The procedures you have in place to counter the risks that your firm might be used by
third parties to further financial crime (this includes any offence involving fraud or
dishonesty; misconduct in, or misuse of, information relating to financial markets or
handling the proceeds of crime).</p>',
    ),
(object)array(
        'word' => 'Financial promotion',
        'definition' => '<p>A financial promotion is a communication that is an invitation or an inducement to
engage in investment activity. Credit-related regulated activities – including entering into
regulated credit agreements as a lender and carrying on debt management – are included
in the definition of an ‘investment activity’ for the purposes of this definition.</p><p>For further information: <a href="http://www.fca.org.uk/firms/being-regulated/financial-promotions/
what-is-a-financial-promotion">www.fca.org.uk/firms/being-regulated/financial-promotions/
what-is-a-financial-promotion</a></p>',
    ),
(object)array(
        'word' => 'Financial resources',
        'definition' => '<p>If you apply for full permission you will need to provide management accounts, sources
of your capital, and any external funding.</p><p>
If you apply for limited permission we will just ask you whether you will remain solvent
and you will need to provide evidence that you are if we ask.</p>',
    ),
(object)array(
        'word' => 'Financial Services Register',
        'definition' => '<p>The Financial Services Register is a public record on our website of all the firms and
individuals in the financial services industry that we regulate.</p>',
    ),
(object)array(
        'word' => 'Full permission',
        'definition' => '<p>This is a term we use to describe the level of FCA authorisation some firms will need to
apply for.</p> <p>We have two categories of authorisation for consumer credit firms: ‘limited permission’
and ‘full permission’. Whether you need to apply for limited or full permission depends
on the regulated activities your firm will carry on. </p><p>
Use our decision tree to see which level of permission you should apply for. [insert link to
decision tree]</p>',
    ),
(object)array(
        'word' => 'Green deal broking',
        'definition' => '<p>Credit broking in relation to green deal plans, as defined under Section 1 of the Energy
Act 2011: <a href="http://www.legislation.gov.uk/ukpga/2011/16/contents/enacted">www.legislation.gov.uk/ukpga/2011/16/contents/enacted</a></p>',
    ),
(object)array(
        'word' => 'High-cost short term credit',
        'definition' => '<p>This type of lending is defined in our Handbook:
<a href="http://www.fshandbook.info/FS/html/FCA/Glossary/H">www.fshandbook.info/FS/html/FCA/Glossary/H</a></p>',
    ),
(object)array(
        'word' => 'Interim permission references number',
        'definition' => '<p>The number that we allocated to your firm when you registered with us for interim
permission. You can find this on your interim permission payment reciept, once your
application is approved.</p>',
    ),
(object)array(
        'word' => 'Lead generators',
        'definition' => '<p>Another firm or individual that acquires the personal contact details of customers and
passes them to you in return for a fee.</p>',
    ),
(object)array(
        'word' => 'Legal status',
        'definition' => '<p>The type of firm that you are: for example, sole trader, public limited company, private
limited company, etc. We give a full list in our application pack.</p><p>Please note that the legal status ‘sole trader’ means that the firm is an individual person.
For an incorporated company, which is run by a single person, the correct status is likely
to be ‘private limited company’.</p>',
    ),
(object)array(
        'word' => 'Limited permission',
        'definition' => '<p>This is a term we use to describe the level of FCA authorisation some firms will be able to
apply for.</p><p>We have two categories of authorisation for consumer credit firms: ‘limited permission’
and ‘full permission’. Whether you need to apply for limited or full permission depends
on the regulated activities your firm will carry on.</p><p>Firms carrying on certain activities in some limited circumstances only are able to apply
for limited permission. Their permission from the FCA will be restricted to certain consumer
credit activities and subject to limitations.</p><p>Use our decision tree to see which level of permission you should apply for.</p><p>The full definition of limited permission is in our Handbook:
<a href="http://www.fshandbook.info/FS/html/FCA/Glossary/L">www.fshandbook.info/FS/html/FCA/Glossary/L</a></p>',
    ),
(object)array(
        'word' => 'Locum arrangements',
        'definition' => '<p>A locum agreement is an arrangement with another firm who has the same permissions
as you, to assist or help your customers on a temporary basis.</p><p>We ask about this because there is a potential risk to your customers if your firm is solely
dependent on one individual to run the business and something unforeseen happens to that
individual. We want to find out what arrangements you have in place if that were to happen.</p>',
    ),
(object)array(
        'word' => 'Market abuse',
        'definition' => '<p>Certain types of behavior, such as insider dealing and market manipulation, can amount to
market abuse. We will ask you to briefly describe the steps you have put in place to counter
the risk that you or your staff may engage in activity which constitutes market abuse.</p>',
    ),
(object)array(
        'word' => 'Mitigation plan',
        'definition' => '<p>How you plan to deal with risks in your business.</p>',
    ),
(object)array(
        'word' => 'Network',
        'definition' => '<p>In summary, this refers to a firm who is the principal to several appointed representatives
See the full definition in our Handbook for further details if this is relevant to your firm :
<a href="http://www.fshandbook.info/FS/html/FCA/Glossary/N]">www.fshandbook.info/FS/html/FCA/Glossary/N]</a></p>',
    ),
(object)array(
        'word' => 'Not-for-profit body',
        'definition' => '<p>For these purposes, a not-for-profit body is one which, by virtue of its constitution or any
enactment;</p><p><ul><li>is required (after payment of outgoings) to apply the whole of its income, and any
capital which it expends, for charitable or public purposes, and</li><li>is prohibited from directly or indirectly distributing amongst its members any part of
its assets (otherwise than for charitable or public purposes).</li></ul></p>',
    ),
(object)array(
        'word' => 'OFT licence number',
        'definition' => '<p>The reference number that the Office of Fair Trading allocated to your firm when you
received your consumer credit licence.</p>',
    ),
(object)array(
        'word' => 'Organisation structure chart',
        'definition' => '<p>This should be a staff organisation structure chart that clearly indicates senior
management and decision makers. We will need to know about your ‘mind and
management’ – in other words, the key officers and directors and their responsibilities
within the structure of the firm.</p><p>We will not ask sole traders or sole director limited companies for this.</p>',
    ),
(object)array(
        'word' => 'Outsourcing arrangements',
        'definition' => '<p>Any arrangements you have with another firm to provide services that might otherwise
be performed by your own in-house employees. We will ask you to include details of the
parties that the functions will be outsourced to and how you will monitor and control the
outsourced functions.</p>',
    ),
(object)array(
        'word' => 'Principal place of business',
        'definition' => '<p>The main place where your firm’s work is performed or business is carried out. This will
appear on the Financial Services Register.</p>',
    ),
(object)array(
        'word' => 'Principles for businesses',
        'definition' => '<p>The fundamental obligations that FCA-regulated firms must comply with at all times.
Link to: <a href="http://www.fshandbook.info/FS/html/FCA/PRIN">www.fshandbook.info/FS/html/FCA/PRIN</a></p>',
    ),
(object)array(
        'word' => 'Professional adviser',
        'definition' => '<p>If you use a professional adviser (such as a compliance consultant) to help you with
regulatory returns or compliance matters, then we will need their details.</p>',
    ),
(object)array(
        'word' => 'Registered name',
        'definition' => '<p>This is the name that will appear on the Financial Services Register in relation to your firm.</p>
        <p>If you are an incorporated firm, then this is the full current firm name registered at
Companies House.</p><p>If you are a sole trader, you should put your personal name as the registered name.</p>',
    ),
(object)array(
        'word' => 'Registered office address',
        'definition' => '<p>If you are an incorporated firm this will be the name you have registered at Companies House.</p>',
    ),
(object)array(
        'word' => 'Regulated activities',
        'definition' => '<p>A regulated activity is an activity of a type prescribed by legislation. For example, entering
into regulated credit agreements as lender or credit broking. Firms who carry out regulated
activities in the UK are required to be authorised by the FCA to conduct those activities.
The full list of regulated activities is set out in our Handbook:
<a href="http://www.fshandbook.info/FS/html/handbook/PERG/2/7]">www.fshandbook.info/FS/html/handbook/PERG/2/7]</a></p>',
    ),
(object)array(
        'word' => 'Regulatory reporting',
        'definition' => '<p>Once you become authorised, you will begin reporting information to us about your
business on a regular basis through an online system on our website. This includes basic
details of your consumer credit business for limited permission firms, and some additional
key information for full permission firms.</p>',
    ),
(object)array(
        'word' => 'Remuneration structure',
        'definition' => '<p>How you generate income from your regulated activities. For example, from commission
from a finance provider or money from your clients.</p>',
    ),
(object)array(
        'word' => 'Responsible lending',
        'definition' => '<p>The conduct of business requirements set out in Chapter 5 of our Consumer Credit
sourcebook (CONC) .</p>',
    ),
(object)array(
        'word' => 'Scope of permission',
        'definition' => '<p>The regulated activities that your FCA Part 4A permission allows you to carry out. Your
scope of permission will need to cover all the regulated activities that your firm carries out.</p>',
    ),
(object)array(
        'word' => 'Significant events',
        'definition' => '<p>Significant events include, but are not limited to:</p><ul><li>any material litigation in the last five years before the date of the application;</li>
<li>any material written complaints made by customers or former customers in the last
five years accepted by the applicant or those upheld or awaiting determination by an
ombudsman;</li><li>any insolvency events in relation to bankruptcy, winding-up company or individual
voluntary arrangements, receivership or administration;</li><li>any failure to satisfy a judgement debt under a court order in the UK and elsewhere
in the last ten years;</li><li>any outstanding financial obligations arising from regulated activities the applicant
carried on in the past, including any outstanding fees to the Financial Services Authority,
Financial Conduct Authority or the Prudential Authority or any other financial services
regulator.</li><li>There is more information on disclosing significant events in COND 1.3.3 G.</li>
        </ul>',
    ),
(object)array(
        'word' => 'Sole trader',
        'definition' => '<p>Someone who operates as an individual other than through the use of a company
structure or partnership and has sole responsibility for the actions of the business. Sole traders
are personally responsible for any liabilities incurred by the business. A sole trader generally:</p>
<ul><li>has the right to make all decisions affecting the business ;</li><li>owns all the assets of the business;</li>
<li>is responsible for paying income tax on profits of the business;</li><li>is responsible for the debts and obligations of the business without any limit.</li></ul>',
    ),
(object)array(
        'word' => 'Supplier',
        'definition' => '<p>A supplier is a firm whose main business is to sell goods or supply services and not to
carry out a regulated activity, other than the activity of entering into regulated consumer
hire agreements as owner (or exercising, or having the right to exercise the owner’s rights
and duties under regulated consumer hire agreements).
Note that there is a different definition for a ‘domestic premises supplier.’</p>',
    ),
(object)array(
        'word' => 'Threshold conditions',
        'definition' => '<p>All firms have to meet our minimum standards to become and remain authorised. These are known as our threshold conditions. Some threshold conditions are modified for firms
that apply for limited permission.</p> <p> The threshold conditions are explained in our guide for firms (pages 13-14) and are set out in full in our Handbook. </p>
<p>Guide for firms: <a href="http//www.fca.org.uk/your-fca/documents/consumer-credit-being-regulated">www.fca.org.uk/your-fca/documents/consumer-credit-being-regulated</a></p>
<p>Handbook: <a href="http://www.fshandbook.info/FS/html/FCA/COND">www.fshandbook.info/FS/html/FCA/COND</a></p>',
    ),
(object)array(
        'word' => 'Trading name',
        'definition' => '<p>The name that your firm trades under.</p>',
    ),
(object)array(
        'word' => 'Treating customers fairly',
        'definition' => '<p>This is one of our most fundamental principles for businesses, which are the principles
that all FCA-regulated firms must comply with at all times. Principle six says “A firm must
pay due regard to the interest of its customers and treat them fairly”. We explain more
about this, and the six consumer outcomes, on our website:</p><p><a href="http://www.fca.org.uk/firms/being-regulated/meeting-your-obligations/fair-treatment-of-customers">www.fca.org.uk/firms/being-regulated/meeting-your-obligations/fair-treatment-of-customers</a></p>',
    ),
(object)array(
        'word' => 'Unregulated activities',
        'definition' => '<p>Any activities your business will carry out which do not require authorisation by FCA,
whether or not they are connected to the regulated activities.</p>',
    ),
(object)array(
        'word' => 'Validation order',
        'definition' => '<p>Before 1 April 2014, this term referred to an order for which firms could apply to the
Office of Fair Trading to validate consumer credit or hire agreements that were entered into
by an unlicensed creditor or as a result of an introduction by an unlicensed credit-broker.</p><p>Since 1 April 2014, the FCA has adopted the same terminology because industry is
familiar with it. In the FCA context, the term is being used to refer to a notice made by
the FCA allowing a regulated credit or hire agreement to be enforced or a notice
allowing money paid or property transferred under those agreements to be retained.</p><p>There is further guidance on this on our website:
<a href="http://www.fca.org.uk/static/fca/documents/cc-validation-order-form-guidance-notes.docx">http://www.fca.org.uk/static/fca/documents/cc-validation-order-form-guidance-notes.docx</a></p>',
    ),
(object)array(
        'word' => 'Variation of permission',
        'definition' => '<p>If you are already authorised by us and want to add consumer credit activities, you will
need to apply for a ‘variation of permission’. You will need to follow the instructions on
our website about how to make a variation of permission application:</p><p><a href="http://www.fca.org.uk/firms/firm-types/consumer-credit/authorisation">www.fca.org.uk/firms/firm-types/consumer-credit/authorisation</a></p>',
    ),
);
$json = json_encode($data);
echo $_GET['callback'] . '(' . $json . ')';