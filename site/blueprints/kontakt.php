<?php if(!defined('KIRBY')) exit ?>

title: Kontakt
pages: false
files: false
fields:
  pagesettings:
    label: Kontaktintro
    type: headline
  title:
    label: Titel
    type:  text
  text:
    label: Text
    type:  textarea
  content:
    label: Kontaktdaten
    type: headline
  company:
    label: Firmenname
    type: text
    width: 1/2
    icon: building
  contact:
    label: Ansprechpartner
    type: text
    width: 1/2
    icon: user
  street:
    label: Straße
    type: text
    width: 1/3
    icon: map-marker
  zip:
    label: Postleitzahl
    type: number
    width: 1/3
    icon: map-marker
    validate:
      - alphanum
  location:
    label: Ort
    type: text
    width: 1/3
    icon: map-marker
  phone:
  	label: Telefon
  	type: tel
  	width: 1/3
  fax:
  	label: Fax
  	type: text
  	width: 1/3
  	icon: fax
  mail:
  	label: E-Mail
  	type: email
  	width: 1/3
  	icon: envelope
  	placeholder: mail@placeworkers.com
  	autocomplete: false
