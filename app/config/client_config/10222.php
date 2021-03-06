<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Views
    |--------------------------------------------------------------------------
    |
    | The settings for the view files
    |
    */
   //The tabs for views/contacts/show.blade.php
    'contactsshow' => array(
        'col1tabs' => ['Overview', 'In Depth', 'Opt In', 'Notes'],
        'col2tabs' => ['Purchases', 'Roles'],
        ),

    // 'contactrules' => array(
    //     'first_name'                  => 'between:2,32',
    //     'last_name'                  => 'required|between:2,32',
    //     'email'                 => 'email',
    // ),



    /*
    |--------------------------------------------------------------------------
    | Dropdowns
    |--------------------------------------------------------------------------
    |
    | Dropdowns for the forms
    |
    */
   
    // Seasons
    'seasons' => array(
        '' => 'Choose a Season',
        '2013/14' => '2013/14',
        '2012/13' => '2012/13',
        '2011/12' => '2011/12',
        '2010/11' => '2010/11',
        '2009/10' => '2009/10',
        '2008/09' => '2008/09',
        '2007/08' => '2007/08',
        '2006/07' => '2006/07',
        '2005/06' => '2005/06',
        ),

    // Contacts
    'titles' => array(
        '' => '',
        'Mr' => 'Mr',
        'Mrs' => 'Mrs',
        'Miss' => 'Miss',
        'Ms' => 'Ms',
        'Dr' => 'Dr',
        ),



     // Notes
    'noteTypes' => array(
        '' => '',
        'Mr' => 'Mr',
        'Mrs' => 'Mrs',
        'Miss' => 'Miss',
        'Ms' => 'Ms',
        'Dr' => 'Dr',
        ),



    // Orders
    'orderSource' => array(
        '' => '',
        'Online' => 'Online',
        'Post' => 'Post',
        'Telephone' => 'Telephone',
        'Telephone' => 'Telephone',
        'Office' => 'Office',
        'Stall' => 'Stall',
        ),
    'paymentMethod' => array(
        '' => '',
        'Cash' => 'Cash',
        'Cheque' => 'Cheque',
        'Credit-Debit Card' => 'Credit-Debit Card',
        'Standing Order' => 'Standing Order',
        'PayPal' => 'PayPal'
        ),
    'productList' => array(
        '' => '--- Membership/Season Tickets ---',
        'adult Membership' => 'Adult Membership',
        'junior Membership' => 'Junior Membership',
        'season Ticket (Adult)' => 'Season Ticket (Adult)',
        'season Ticket (Junior) ' => 'Season Ticket (Junior)',
        'community Shares' => 'Community Shares',
        '' => '--- Draws &amp; Raffles ---',
        'treasureline' => 'TreasureLine',
        'holiday Draw' => 'Holiday Draw',
        '' => '--- Sponsorship ---',
        '127 Club' => '127 Club',
        'match Sponsor' => 'Match Sponsor',
        'matchball Sponsor' => 'Matchball Sponsor',
        'matchday Programme Sponsor' => 'Matchday Programme Sponsor',
        'programme Adverts' => 'Programme Adverts',
        'pitchside Hording' => 'Pitchside Hording',
        'pink Sponsorship' => 'Pink Sponsorship',
        'newsletter Sponsor' => 'Newsletter Sponsor',
        'community Sponsor' => 'Community Sponsor',
        'youth Team Sponsor' => 'Youth Team Sponsor',
        'women Team Sponsor' => 'Women Team Sponsor',
        'player Sponsor' => 'Player Sponsor',
        '' => '--- Others ---',
        'club Donations' => 'Club Donations',
        'df Donations' => 'DF Donations',
        'club Events' => 'Club Events',
        'merchanidise' => 'Merchanidise',
        'away Match Travel' => 'Away Match Travel',
        ),


    
         // Broadcasts
    'broadcastTypes' => array(
        '' => '',
        'Newsletter' => 'Newsletter',
        'Offer' => 'Offer',
        'Event' => 'Event',
        'Other' => 'Other'
        ),
     'savedSearches' => array(
        '1' => 'All opted-in contacts',
        '2' => 'All Season Ticket holders',
        '3' => 'All Adult Members',
        '4' => 'All Members',
        ),
    'emailFrom' => array(
        'Paul Howarth|paul@fc-utd.co.uk' => 'Paul Howarth',
        'Lindsey Howard|lindsey@fc-utd.co.uk' => 'Lindsey Howard',
        'Michael Holdsworth|michael@fc-utd.co.uk' => 'Michael Holdsworth',
        ),
    'emailTemplate' => array(
        '1' => 'FC Red',
        '2' => 'FC Black',
        '3' => 'FC Pink',
        '4' => 'Plain text',
        ),





);