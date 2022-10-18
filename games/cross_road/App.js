import {Component} from 'react';
import {withRouter} from 'react-router';

class App extends Component {
  componentDidMount() {
    console.log("App init");
    this.props.router.setRouteLeaveHook(this.props.route, this.onLeave);
  }
  onLeave(nextState) {
    if (nextState.action === 'POP') {
      //...
    }
  }
  //...
}
export default withRouter(App);