<?php
// Automatically created cache file for the package format
// Do not modify this file

$CacheCodeDate = 1061114927;

$Parameters = array( "name" => "corporate_site",
                     "summary" => "Corporate website",
                     "description" => false,
                     "vendor" => false,
                     "priority" => false,
                     "type" => false,
                     "extension" => false,
                     "ezpublish" => array( "version" => "3.2.0-1",
                                           "named-version" => "3.2 pre-alpha" ),
                     "maintainers" => array( array( "name" => "Anonymous User",
                                                    "email" => "nospam@ez.no",
                                                    "role" => "lead",
                                                    "modified" => "1061227724" ) ),
                     "packaging" => array( "timestamp" => "1061227724",
                                           "host" => "bf.ez.no",
                                           "packager" => false ),
                     "source" => false,
                     "documents" => array( array( "name" => "README",
                                                  "mime-type" => "text/plain",
                                                  "os" => false,
                                                  "audience" => false,
                                                  "modified" => "1061227724" ) ),
                     "groups" => array(),
                     "changelog" => array( array( "timestamp" => "1061227724",
                                                  "person" => "Anonymous User",
                                                  "email" => "nospam@ez.no",
                                                  "changes" => array( "Creation of package" ),
                                                  "release" => "1",
                                                  "modified" => "1061227724" ) ),
                     "file-list" => array( "default" => array( array( "name" => false,
                                                                      "subdirectory" => false,
                                                                      "type" => "design",
                                                                      "role" => false,
                                                                      "path" => false,
                                                                      "file-type" => false,
                                                                      "design" => "corporate",
                                                                      "copy-file" => false,
                                                                      "modified" => "1061227725",
                                                                      "md5" => false ),
                                                               array( "name" => "override.ini.append",
                                                                      "subdirectory" => "settings/siteaccess/corporate",
                                                                      "type" => "file",
                                                                      "role" => false,
                                                                      "path" => "settings/siteaccess/corporate/override.ini.append",
                                                                      "file-type" => false,
                                                                      "design" => false,
                                                                      "copy-file" => false,
                                                                      "modified" => "1061227727",
                                                                      "md5" => "0c778a9edb88685106f4eb37e8be11a4" ),
                                                               array( "name" => "site.ini.append",
                                                                      "subdirectory" => "settings/siteaccess/corporate",
                                                                      "type" => "file",
                                                                      "role" => false,
                                                                      "path" => "settings/siteaccess/corporate/site.ini.append",
                                                                      "file-type" => false,
                                                                      "design" => false,
                                                                      "copy-file" => false,
                                                                      "modified" => "1061227728",
                                                                      "md5" => "695bcd8c5d4856a93e115a164b2be303" ),
                                                               array( "name" => "thumbnail.png",
                                                                      "subdirectory" => false,
                                                                      "type" => "thumbnail",
                                                                      "role" => false,
                                                                      "path" => "corporatethumbnail.png",
                                                                      "file-type" => false,
                                                                      "design" => false,
                                                                      "copy-file" => false,
                                                                      "modified" => "1061227733",
                                                                      "md5" => "e8713bff2d42bebc03b8f1514a12e2d8" ) ) ),
                     "version-number" => "1.0",
                     "release-number" => "1",
                     "release-timestamp" => false,
                     "licence" => "GPL",
                     "state" => "alpha",
                     "dependencies" => array( "provides" => array( array( "type" => "ezfile",
                                                                          "name" => "collection",
                                                                          "value" => "default",
                                                                          "modified" => "1061227725" ) ),
                                              "requires" => array( array( "type" => "ezdb",
                                                                          "name" => "mysql",
                                                                          "value" => false,
                                                                          "modified" => "1061227729" ),
                                                                   array( "type" => "ezdb",
                                                                          "name" => "postgresql",
                                                                          "value" => false,
                                                                          "modified" => "1061227730" ),
                                                                   array( "type" => "ezdb",
                                                                          "name" => "postgresql",
                                                                          "value" => false,
                                                                          "modified" => "1061227731" ) ),
                                              "obsoletes" => array(),
                                              "conflicts" => array() ),
                     "install" => array( array( "collection" => "default",
                                                "type" => "ezfile",
                                                "name" => false,
                                                "modified" => "1061227725",
                                                "os" => false,
                                                "filename" => false,
                                                "sub-directory" => false ),
                                         array( "path" => "packages/corporate.sql",
                                                "database-type" => "mysql",
                                                "type" => "sql",
                                                "name" => false,
                                                "modified" => "1061227729",
                                                "os" => false,
                                                "filename" => "corporate.sql",
                                                "sub-directory" => false ),
                                         array( "path" => "kernel/sql/postgresql/kernel_schema.sql",
                                                "database-type" => "postgresql",
                                                "type" => "sql",
                                                "name" => false,
                                                "modified" => "1061227730",
                                                "os" => false,
                                                "filename" => "kernel_schema.sql",
                                                "sub-directory" => false ),
                                         array( "path" => "kernel/sql/postgresql/cleandata.sql",
                                                "database-type" => "postgresql",
                                                "type" => "sql",
                                                "name" => false,
                                                "modified" => "1061227731",
                                                "os" => false,
                                                "filename" => "cleandata.sql",
                                                "sub-directory" => false ) ),
                     "uninstall" => array( array( "collection" => "default",
                                                  "type" => "ezfile",
                                                  "name" => false,
                                                  "modified" => "1061227725",
                                                  "os" => false,
                                                  "filename" => false,
                                                  "sub-directory" => false ) ) );
$ModifiedParameters = array( "name" => "1061227724",
                             "version-number" => "1061227724",
                             "release-number" => "1061227724",
                             "licence" => "1061227724",
                             "state" => "1061227724",
                             "summary" => 1061227734 );
$RepositoryPath = "packages";
?>
