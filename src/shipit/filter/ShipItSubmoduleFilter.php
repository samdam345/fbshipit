      \printf(
      return \sprintf(
      \printf(
      return \sprintf(
      return \sprintf(
      foreach(\explode("\n", $body) as $line) {
        if (!\strncmp('-Subproject commit ', $line, 19)) {
          $old_rev = \trim(\substr($line, 19));
        } else if (!\strncmp('+Subproject commit ', $line, 19)) {
          $new_rev = \trim(\substr($line, 19));