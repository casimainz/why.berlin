#
# Add content_key field to sys_file_reference
#
CREATE TABLE sys_file_reference (
  content_key varchar(255) DEFAULT '' NOT NULL,
  content text,
);

#
# Add field in tt_content to define the id of the featured event and the opacity of the event box
#
CREATE TABLE tt_content (
  tx_rw_featured_event int(11),
  tx_rw_featured_event_opacity int(11) unsigned  DEFAULT '0' NOT NULL,
  tx_rw_googlemaps_longitude varchar(255),
  tx_rw_googlemaps_latitude varchar(255)
);

#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
  end_datetime int(11) DEFAULT '0' NOT NULL,
  longitude varchar(255),
  latitude varchar(255),
  location varchar(255),
  tx_csseo int(11) unsigned NOT NULL default '0',
);

