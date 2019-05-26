<?php

class TeamSpeak3
{
  /**
   * TeamSpeak 3 protocol welcome message.
   */
  const READY = "TS3";

  /**
   * TeamSpeak 3 protocol greeting message prefix.
   */
  const GREET = "Welcome";

  /**
   * TeamSpeak 3 protocol error message prefix.
   */
  const ERROR = "error";

  /**
   * TeamSpeak 3 protocol event message prefix.
   */
  const EVENT = "notify";

  /**
   * TeamSpeak 3 protocol server connection handler ID prefix.
   */
  const SCHID = "selected";

  /**
   * TeamSpeak 3 PHP Framework version.
   */
  const LIB_VERSION = "1.1.24";

  /*@
   * TeamSpeak 3 protocol separators.
   */
  const SEPARATOR_LINE = "\n"; //!< protocol line separator
  const SEPARATOR_LIST = "|";  //!< protocol list separator
  const SEPARATOR_CELL = " ";  //!< protocol cell separator
  const SEPARATOR_PAIR = "=";  //!< protocol pair separator


  /*@
   * TeamSpeak 3 codec identifiers.
   */
  const CODEC_SPEEX_NARROWBAND    = 0x00; //!< 0: speex narrowband     (mono, 16bit, 8kHz)
  const CODEC_SPEEX_WIDEBAND      = 0x01; //!< 1: speex wideband       (mono, 16bit, 16kHz)
  const CODEC_SPEEX_ULTRAWIDEBAND = 0x02; //!< 2: speex ultra-wideband (mono, 16bit, 32kHz)
  const CODEC_CELT_MONO           = 0x03; //!< 3: celt mono            (mono, 16bit, 48kHz)
  const CODEC_OPUS_VOICE          = 0x04; //!< 3: opus voice           (interactive)
  const CODEC_OPUS_MUSIC          = 0x05; //!< 3: opus music           (interactive)

  /*@
   * TeamSpeak 3 kick reason types.
   */
  const KICK_CHANNEL = 0x04; //!< 4: kick client from channel
  const KICK_SERVER  = 0x05; //!< 5: kick client from server

  /*@
   * TeamSpeak 3 text message target modes.
   */
  const TEXTMSG_CLIENT  = 0x01; //!< 1: target is a client
  const TEXTMSG_CHANNEL = 0x02; //!< 2: target is a channel
  const TEXTMSG_SERVER  = 0x03; //!< 3: target is a virtual server
  
  /*@
   * TeamSpeak 3 plugin command target modes.
   */
  const PLUGINCMD_CHANNEL            = 0x01; //!< 1: send plugincmd to all clients in current channel
  const PLUGINCMD_SERVER             = 0x02; //!< 2: send plugincmd to all clients on server
  const PLUGINCMD_CLIENT             = 0x03; //!< 3: send plugincmd to all given client ids
  const PLUGINCMD_CHANNEL_SUBSCRIBED = 0x04; //!< 4: send plugincmd to all subscribed clients in current channel


  /*@
   * TeamSpeak 3 host banner modes.
   */
  const HOSTBANNER_NO_ADJUST     = 0x00; //!< 0: do not adjust
  const HOSTBANNER_IGNORE_ASPECT = 0x01; //!< 1: adjust but ignore aspect ratio
  const HOSTBANNER_KEEP_ASPECT   = 0x02; //!< 2: adjust and keep aspect ratio

  /*@
   * TeamSpeak 3 client identification types.
   */
  const CLIENT_TYPE_REGULAR     = 0x00; //!< 0: regular client
  const CLIENT_TYPE_SERVERQUERY = 0x01; //!< 1: query client

  /*@
   * TeamSpeak 3 permission group database types.
   */
  const GROUP_DBTYPE_TEMPLATE    = 0x00; //!< 0: template group     (used for new virtual servers)
  const GROUP_DBTYPE_REGULAR     = 0x01; //!< 1: regular group      (used for regular clients)
  const GROUP_DBTYPE_SERVERQUERY = 0x02; //!< 2: global query group (used for ServerQuery clients)

  /*@
   * TeamSpeak 3 permission group name modes.
   */
  const GROUP_NAMEMODE_HIDDEN = 0x00; //!< 0: display no name
  const GROUP_NAMEMODE_BEFORE = 0x01; //!< 1: display name before client nickname
  const GROUP_NAMEMODE_BEHIND = 0x02; //!< 2: display name after client nickname

  /*@
   * TeamSpeak 3 permission group identification types.
   */
  const GROUP_IDENTIFIY_STRONGEST = 0x01; //!< 1: identify most powerful group
  const GROUP_IDENTIFIY_WEAKEST   = 0x02; //!< 2: identify weakest group

  /*@
   * TeamSpeak 3 permission types.
   */
  const PERM_TYPE_SERVERGROUP   = 0x00; //!< 0: server group permission
  const PERM_TYPE_CLIENT        = 0x01; //!< 1: client specific permission
  const PERM_TYPE_CHANNEL       = 0x02; //!< 2: channel specific permission
  const PERM_TYPE_CHANNELGROUP  = 0x03; //!< 3: channel group permission
  const PERM_TYPE_CHANNELCLIENT = 0x04; //!< 4: channel-client specific permission

  /*@
   * TeamSpeak 3 permission categories.
   */
  const PERM_CAT_GLOBAL              = 0x10; //!< 00010000: global permissions
  const PERM_CAT_GLOBAL_INFORMATION  = 0x11; //!< 00010001: global permissions -> global information
  const PERM_CAT_GLOBAL_SERVER_MGMT  = 0x12; //!< 00010010: global permissions -> virtual server management
  const PERM_CAT_GLOBAL_ADM_ACTIONS  = 0x13; //!< 00010011: global permissions -> global administrative actions
  const PERM_CAT_GLOBAL_SETTINGS     = 0x14; //!< 00010100: global permissions -> global settings
  const PERM_CAT_SERVER              = 0x20; //!< 00100000: virtual server permissions
  const PERM_CAT_SERVER_INFORMATION  = 0x21; //!< 00100001: virtual server permissions -> virtual server information
  const PERM_CAT_SERVER_ADM_ACTIONS  = 0x22; //!< 00100010: virtual server permissions -> virtual server administrative actions
  const PERM_CAT_SERVER_SETTINGS     = 0x23; //!< 00100011: virtual server permissions -> virtual server settings
  const PERM_CAT_CHANNEL             = 0x30; //!< 00110000: channel permissions
  const PERM_CAT_CHANNEL_INFORMATION = 0x31; //!< 00110001: channel permissions -> channel information
  const PERM_CAT_CHANNEL_CREATE      = 0x32; //!< 00110010: channel permissions -> create channels
  const PERM_CAT_CHANNEL_MODIFY      = 0x33; //!< 00110011: channel permissions -> edit channels
  const PERM_CAT_CHANNEL_DELETE      = 0x34; //!< 00110100: channel permissions -> delete channels
  const PERM_CAT_CHANNEL_ACCESS      = 0x35; //!< 00110101: channel permissions -> access channels
  const PERM_CAT_GROUP               = 0x40; //!< 01000000: group permissions
  const PERM_CAT_GROUP_INFORMATION   = 0x41; //!< 01000001: group permissions -> group information
  const PERM_CAT_GROUP_CREATE        = 0x42; //!< 01000010: group permissions -> create groups
  const PERM_CAT_GROUP_MODIFY        = 0x43; //!< 01000011: group permissions -> edit groups
  const PERM_CAT_GROUP_DELETE        = 0x44; //!< 01000100: group permissions -> delete groups
  const PERM_CAT_CLIENT              = 0x50; //!< 01010000: client permissions
  const PERM_CAT_CLIENT_INFORMATION  = 0x51; //!< 01010001: client permissions -> client information
  const PERM_CAT_CLIENT_ADM_ACTIONS  = 0x52; //!< 01010010: client permissions -> client administrative actions
  const PERM_CAT_CLIENT_BASICS       = 0x53; //!< 01010011: client permissions -> client basic communication
  const PERM_CAT_CLIENT_MODIFY       = 0x54; //!< 01010100: client permissions -> edit clients
  const PERM_CAT_FILETRANSFER        = 0x60; //!< 01100000: file transfer permissions
  const PERM_CAT_NEEDED_MODIFY_POWER = 0xFF; //!< 11111111: needed permission modify power (grant) permissions

  /*@
   * TeamSpeak 3 file types.
   */
  const FILE_TYPE_DIRECTORY = 0x00; //!< 0: file is directory
  const FILE_TYPE_REGULAR   = 0x01; //!< 1: file is regular

  /*@
   * TeamSpeak 3 server snapshot types.
   */
  const SNAPSHOT_STRING = 0x00; //!< 0: default string
  const SNAPSHOT_BASE64 = 0x01; //!< 1: base64 string
  const SNAPSHOT_HEXDEC = 0x02; //!< 2: hexadecimal string

  /*@
   * TeamSpeak 3 channel spacer types.
   */
  const SPACER_SOLIDLINE      = 0x00; //!< 0: solid line
  const SPACER_DASHLINE       = 0x01; //!< 1: dash line
  const SPACER_DOTLINE        = 0x02; //!< 2: dot line
  const SPACER_DASHDOTLINE    = 0x03; //!< 3: dash dot line
  const SPACER_DASHDOTDOTLINE = 0x04; //!< 4: dash dot dot line
  const SPACER_CUSTOM         = 0x05; //!< 5: custom format

  /*@
   * TeamSpeak 3 channel spacer alignments.
   */
  const SPACER_ALIGN_LEFT   = 0x00; //!< 0: alignment left
  const SPACER_ALIGN_RIGHT  = 0x01; //!< 1: alignment right
  const SPACER_ALIGN_CENTER = 0x02; //!< 2: alignment center
  const SPACER_ALIGN_REPEAT = 0x03; //!< 3: repeat until the whole line is filled

  /*@
   * TeamSpeak 3 reason identifiers.
   */
  const REASON_NONE                = 0x00; //!<  0: no reason
  const REASON_MOVE                = 0x01; //!<  1: channel switched or moved
  const REASON_SUBSCRIPTION        = 0x02; //!<  2: subscription added or removed
  const REASON_TIMEOUT             = 0x03; //!<  3: client connection timed out
  const REASON_CHANNEL_KICK        = 0x04; //!<  4: client kicked from channel
  const REASON_SERVER_KICK         = 0x05; //!<  5: client kicked from server
  const REASON_SERVER_BAN          = 0x06; //!<  6: client banned from server
  const REASON_SERVER_STOP         = 0x07; //!<  7: server stopped
  const REASON_DISCONNECT          = 0x08; //!<  8: client disconnected
  const REASON_CHANNEL_UPDATE      = 0x09; //!<  9: channel information updated
  const REASON_CHANNEL_EDIT        = 0x0A; //!< 10: channel information edited
  const REASON_DISCONNECT_SHUTDOWN = 0x0B; //!< 11: client disconnected on server shutdown

  protected static $escape_patterns = array(
    "\\" => "\\\\", // backslash
    "/"  => "\\/",  // slash
    " "  => "\\s",  // whitespace
    "|"  => "\\p",  // pipe
    ";"  => "\\;",  // semicolon
    "\a" => "\\a",  // bell
    "\b" => "\\b",  // backspace
    "\f" => "\\f",  // formfeed
    "\n" => "\\n",  // newline
    "\r" => "\\r",  // carriage return
    "\t" => "\\t",  // horizontal tab
    "\v" => "\\v"   // vertical tab
  );

  public static function factory($uri)
  {
    self::init();

    $uri = new TeamSpeak3_Helper_Uri($uri);

    $adapter = self::getAdapterName($uri->getScheme());
    $options = array("host" => $uri->getHost(), "port" => $uri->getPort(), "timeout" => (int) $uri->getQueryVar("timeout", 10), "blocking" => (int) $uri->getQueryVar("blocking", 1));

    self::loadClass($adapter);

    $object = new $adapter($options);

    if($object instanceof TeamSpeak3_Adapter_ServerQuery)
    {
      $node = $object->getHost();

      if($uri->hasUser() && $uri->hasPass())
      {
        $node->login($uri->getUser(), $uri->getPass());
      }

      if($uri->hasQueryVar("nickname"))
      {
        $node->setPredefinedQueryName($uri->getQueryVar("nickname"));
      }

      if($uri->getFragment() == "use_offline_as_virtual")
      {
        $node->setUseOfflineAsVirtual(TRUE);
      }
      elseif($uri->hasQueryVar("use_offline_as_virtual"))
      {
        $node->setUseOfflineAsVirtual($uri->getQueryVar("use_offline_as_virtual") ? TRUE : FALSE);
      }

      if($uri->getFragment() == "clients_before_channels")
      {
        $node->setLoadClientlistFirst(TRUE);
      }
      elseif($uri->hasQueryVar("clients_before_channels"))
      {
        $node->setLoadClientlistFirst($uri->getQueryVar("clients_before_channels") ? TRUE : FALSE);
      }

      if($uri->getFragment() == "no_query_clients")
      {
        $node->setExcludeQueryClients(TRUE);
      }
      elseif($uri->hasQueryVar("no_query_clients"))
      {
        $node->setExcludeQueryClients($uri->getQueryVar("no_query_clients") ? TRUE : FALSE);
      }

      if($uri->hasQueryVar("server_id"))
      {
        $node = $node->serverGetById($uri->getQueryVar("server_id"));
      }
      elseif($uri->hasQueryVar("server_uid"))
      {
        $node = $node->serverGetByUid($uri->getQueryVar("server_uid"));
      }
      elseif($uri->hasQueryVar("server_port"))
      {
        $node = $node->serverGetByPort($uri->getQueryVar("server_port"));
      }
      elseif($uri->hasQueryVar("server_name"))
      {
        $node = $node->serverGetByName($uri->getQueryVar("server_name"));
      }
      elseif($uri->hasQueryVar("server_tsdns"))
      {
        $node = $node->serverGetByTSDNS($uri->getQueryVar("server_tsdns"));
      }

      if($node instanceof TeamSpeak3_Node_Server)
      {
        if($uri->hasQueryVar("channel_id"))
        {
          $node = $node->channelGetById($uri->getQueryVar("channel_id"));
        }
        elseif($uri->hasQueryVar("channel_name"))
        {
          $node = $node->channelGetByName($uri->getQueryVar("channel_name"));
        }

        if($uri->hasQueryVar("client_id"))
        {
          $node = $node->clientGetById($uri->getQueryVar("client_id"));
        }
        if($uri->hasQueryVar("client_uid"))
        {
          $node = $node->clientGetByUid($uri->getQueryVar("client_uid"));
        }
        elseif($uri->hasQueryVar("client_name"))
        {
          $node = $node->clientGetByName($uri->getQueryVar("client_name"));
        }
      }

      return $node;
    }

    return $object;
  }

  protected static function loadClass($class)
  {
    if(class_exists($class, FALSE) || interface_exists($class, FALSE))
    {
      return;
    }

    if(preg_match("/[^a-z0-9\\/\\\\_.-]/i", $class))
    {
      throw new LogicException("illegal characters in classname '" . $class . "'");
    }

    $file = self::getFilePath($class) . ".php";

    if(!file_exists($file) || !is_readable($file))
    {
      throw new LogicException("file '" . $file . "' does not exist or is not readable");
    }

    if(class_exists($class, FALSE) || interface_exists($class, FALSE))
    {
      throw new LogicException("class '" . $class . "' does not exist");
    }

    return include_once($file);
  }


  protected static function getFilePath($name)
  {
    $path = str_replace("_", DIRECTORY_SEPARATOR, $name);
    $path = str_replace(__CLASS__, dirname(__FILE__), $path);

    return $path;
  }

  protected static function getAdapterName($name, $namespace = "TeamSpeak3_Adapter_")
  {
    $path = self::getFilePath($namespace);
    $scan = scandir($path);

    foreach($scan as $node)
    {
      $file = TeamSpeak3_Helper_String::factory($node)->toLower();

      if($file->startsWith($name) && $file->endsWith(".php"))
      {
        return $namespace . str_replace(".php", "", $node);
      }
    }

    throw new TeamSpeak3_Adapter_Exception("adapter '" . $name . "' does not exist");
  }

  public static function autoload($class)
  {
    if(substr($class, 0, strlen(__CLASS__)) != __CLASS__) return;

    try
    {
      self::loadClass($class);

      return TRUE;
    }
    catch(Exception $e)
    {
      return FALSE;
    }
  }

  public static function init()
  {
    if(version_compare(phpversion(), "5.2.1") == -1)
    {
      throw new LogicException("this particular software cannot be used with the installed version of PHP");
    }

    if(!function_exists("stream_socket_client"))
    {
      throw new LogicException("network functions are not available in this PHP installation");
    }

    if(!function_exists("spl_autoload_register"))
    {
      throw new LogicException("autoload functions are not available in this PHP installation");
    }

    if(!class_exists("TeamSpeak3_Helper_Profiler"))
    {
      spl_autoload_register(array(__CLASS__, "autoload"));
    }

    TeamSpeak3_Helper_Profiler::start();
  }

  public static function getEscapePatterns()
  {
    return self::$escape_patterns;
  }

  public static function dump($var, $echo = TRUE)
  {
    ob_start();
    var_dump($var);

    $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", ob_get_clean());

    if(PHP_SAPI == "cli")
    {
      $output = PHP_EOL . PHP_EOL . $output . PHP_EOL;
    }
    else
    {
      $output = "<pre>" . htmlspecialchars($output, ENT_QUOTES, "utf-8") . "</pre>";
    }

    if($echo) echo($output);

    return $output;
  }
}
