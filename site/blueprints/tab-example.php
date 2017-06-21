<?php if(!defined('KIRBY')) exit ?>

title: tabs-demo
pages: false

#########################################################################
## META-DATA
#########################################################################

fields:

  sectionMeta:
    label: Meta
    id: meta
    type: tab
    icon: code

  title:
    label: Title
    type: text

  keywords:
    label: Keywords (SEO)
    type: tags

  description:
    label: Description (SEO)
    type: text

#########################################################################
## SLIDER
#########################################################################

  sectionSlider:
    label: Slider
    id: slider
    type: tab
    icon: image

  titleSlider:
    label: Title
    type: text

  textSlider:
    label: Text
    type: text

#########################################################################
## FEATURES
#########################################################################

  sectionFeatures:
    label: Features
    id: features
    type: tab
    icon: diamond

  titleFeatures:
    label: Title
    type: text

  textFeatures:
    label: Text
    type: text

#########################################################################
## WORKFLOW
#########################################################################

  sectionWorkflow:
    label: Workflow
    id: workflow
    type: tab
    icon: random

  titleWorkflow:
    label: Title
    type: text

  textWorkflow:
    label: Text
    type: text

#########################################################################
## TESTIMONIALS
#########################################################################

  sectionQuotes:
    label: Quotes
    id: quotes
    type: tab
    icon: quote-right

  titleQuotes:
    label: Title
    type: text

  textQuotes:
    label: Text
    type: text
