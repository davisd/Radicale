#!/usr/bin/env python
#
# This file is part of Radicale Server - Calendar Server
# Copyright © 2011-2016 Guillaume Ayoub
#
# This library is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This library is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with Radicale.  If not, see <http://www.gnu.org/licenses/>.

"""
Radicale FastCGI Example.

Launch a Radicale FastCGI server according to configuration.

"""

import os
import radicale
from flipflop import WSGIServer


configuration = radicale.config.load([os.environ.get("RADICALE_CONFIG")])
logger = radicale.log.start()
WSGIServer(radicale.Application(configuration, logger)).run()

