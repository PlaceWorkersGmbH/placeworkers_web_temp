<?php if(!defined('KIRBY')) exit ?>

title: Veranstaltung
pages: false
files: true
fields:
  title:
    label: Title
    type: title
    required: true
  date:
    label: Datum
    type: date
    width: 1/2
    default: today
    required: true
  time:
    label: Uhrzeit
    type: time
    width: 1/2
    required: true
  location:
    label: Location
    type: text
    required: true
  text:
    label: Text
    type: textarea
    required: true
