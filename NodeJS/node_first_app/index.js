#!/usr/bin/env node
console.log('Hello, world!');

var co = require('co')
var prompt = require('co-prompt');
var program = require('commander');

program
  .arguments('<file>')
  .option('-u, --username <username>', 'the user to authenticate as')
  .option('-p, --password <password>', 'the user`s password')
  .action(function(file) {
    co(function*() {
      console.log('user: %s pass: %s file: %s', program.username, program.password, program.file);
    });
  })
  .parse(process.argv);